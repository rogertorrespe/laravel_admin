<?php 
namespace App\Http\Controllers;
use FFMpeg\FFProbe;
use FFMpeg as FFMpeg;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Helpers\Common\Functions;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use FFMpeg\Format\Video\X264;

class IndexController extends Controller
{

  // private $ffprobe;
  // private $ffmpeg;

 public function __construct( )
 {
  // $this->ffmpeg= FFMpeg\FFMpeg::create(array(
  //     'ffmpeg.binaries'  => 'E:\ffmpeg\bin\ffmpeg.exe',
  //     'ffprobe.binaries' => 'E:\ffmpeg\bin\ffprobe.exe',
  //     'timeout'          => 3600, // The timeout for the underlying process
  //     'ffmpeg.threads'   => 12, // The number of threads that FFMpeg should use
  // ));
  // $this->ffprobe=  FFMpeg\FFProbe::create(array(
  //     'ffmpeg.binaries'  => 'E:\ffmpeg\bin\ffmpeg.exe',
  //     'ffprobe.binaries' => 'E:\ffmpeg\bin\ffprobe.exe',
  //     'timeout'          => 3600, // The timeout for the underlying process
  //     'ffmpeg.threads'   => 12, // The number of threads that FFMpeg should use
  // ));
     
 }
   public function index(Request $request){
        return '<script>
        (function() {
          var app = {
            launchApp: function() {
              window.location.replace("/open-app");
              this.timer = setTimeout(this.openWebApp, 100);
            },
        
            openWebApp: function() {
              window.location.replace("market://details?id=com.bidnite.android");
            }
          };
        
          app.launchApp();
        })();
        </script>';
    } 
    
    
    public function showVideo(Request $request){
        
        $video_de=base64_decode($request->video_id);
       
        $video_id=str_ireplace("yfmtythd84n4h","",$video_de);
		    $video_res = DB::table('videos as v')
                        ->select(DB::raw('v.video,v.thumb,v.user_id,u.username,v.title,v.description'))
                        ->leftJoin('users as u', 'u.user_id', '=', 'v.user_id')
                        ->where('video_id',$video_id)
						   ->first();
						   if($video_res){
						       $video=$video_res->video;
    						   $thumb=$video_res->thumb; 
    						   $user_id=$video_res->user_id; 
    						   $title=$video_res->title; 
    						   $description=$video_res->description;
    						   $username=$video_res->username; 
                  return view('show-video',compact('video','thumb','user_id','username','description','title'));
						   }
						   
  }

    public function front() {
      $videos = DB :: table('videos')
                ->select('user_id', 'video_id', 'video', 'thumb', 'gif', 'total_likes', 'total_comments', 'total_views')
                ->orderBy('total_likes')->orderBy('total_views')
                ->where(['active' => 1, 'enabled' => 1])
                ->where('video_id', '>=', 145)
                ->get()->take(5);
                // dd($videos);
      return view('home', compact('videos'));
    }

    public function videoInfo($videoId) {

      $video = DB::table('videos as v')
                ->join('users as u', 'u.user_id', 'v.user_id')
                ->select('v.total_views', 'u.username')
                ->where('v.video_id', $videoId)
                ->first();
      $comments = DB::table('comments as c')
                  ->join('users as u', 'u.user_id', 'c.user_id')
                  ->select('u.username', 'c.comment_id', 'c.comment')
                  ->where(['c.active' => 1, 'c.video_id' => $videoId])
                  ->get();
      $comment_html = view('partials.comments', ['comments' => $comments])->render();
      
      return response()->json(['success' => true, 'video' => $video, 'comment_html' => $comment_html]);
    }

    public function videoViewed($videoId) {

      DB::table('videos')
          ->increment('total_views');

      //change the user_id as per the logged in user via the auth()->guard() or not logged in user set to 0
      $uniqueViewExists = DB::table('video_views')
                          ->where(['user_id' => 1, 'video_id' => $videoId, 'viewed_on' => date('Y-m-d')])
                          ->exists();
      
      //set unique id as per cookie/loggedin user
      if (!$uniqueViewExists) {
        DB::table('video_views')
            ->insert(['user_id' => 1, 'video_id' => $videoId, 'viewed_on' => date('Y-m-d'), 'unique_id' => 1]);
      }

      return response()->json(['success' => true]);

    }


    public function test2(){
      $ffprobe = FFMpeg\FFProbe::create();
       $streamsCount=$ffprobe
       ->streams('C:\Users\unify1\Downloads\test2.mp4')
       ->count();
   
       dd($streamsCount);

    }
   
    public function test(){
      $ffmpeg = FFMpeg\FFMpeg::create();
      $ffprobe = FFMpeg\FFProbe::create();

//       $streamCount = $ffprobe->streams(asset('video.mp4'))->audios()->count();
// // dd($streamCount);
//             if ($streamCount > 0) {
//                 $video = $ffmpeg->open(asset('video.mp4'));
//                 $audio_format = new FFMpeg\Format\Audio\Mp3();
    
//                 $video->save($audio_format, 'testAudio.mp3');
//             }
    
//             $advancedMedia = $ffmpeg->openAdvanced(array(asset('water.png'), asset('TikTok.mp4')));
//             $advancedMedia->filters()
//                 // ->custom('[1:v]', 'overlay=W-w-5:5', '[v]');
//                 ->custom('[1:v]scale=720:-2,', 'overlay=W-w-5:H-h-5', '[v]');
//             $advancedMedia
//                 ->map(array('1:v', '[v]'), new X264('aac', 'libx264'), 'testvideo.mp4');
//             $advancedMedia->save();


            $advancedMedia = $ffmpeg->openAdvanced(array(asset('water.png'), asset('TikTok.mp4')));

            $advancedMedia->filters()
                ->custom('[1:v]scale=720:-2,', 'overlay=W-w-5:H-h-5', '[v]');
    
            $advancedMedia
                ->map(array('1:a', '[v]'), new X264('aac', 'libx264'), 'testvideo.mp4');
    
            $advancedMedia->save();
dd(444);
      // $videoFileName=$this->CleanFileNameMp4($request->file('video')->getClientOriginalName());
//       $video=new File(storage_path('app/public/video.mp4'));
//           Storage::putFileAs("public", $video,'s3video.mp4');
//           Storage::setVisibility('public/s3video.mp4', 'public');
// dd(Storage::url('public/s3video.mp4'));
      $timeFolder=time();
      // Functions::ffmpegUpload(asset('video.mp4'),storage_path('app/public/videos/5/video.mp4'),asset('audio.mp3'),storage_path('app/public/sounds/5/'.$timeFolder.'.mp3'),asset('water.png'),'s3','public/videos/5/video.mp4','public/sounds/5/'.$timeFolder.'.mp3');
    
      $uploadStatus=Functions::ffmpegUpload(asset('video.mp4'),storage_path('app/public/videos/5/Testvideo.mp4'),'',storage_path('app/public/sounds/5/'.$timeFolder.'.mp3'),storage_path('app/public/videos/5/thumb/'.$timeFolder.'.jpg'),asset('water.png'),'','','','','','','');

    }
    
}