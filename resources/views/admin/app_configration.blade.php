@extends('layouts.admin')
@section('content')
<link rel="stylesheet" href="{{ asset('css/colorpicker/jquery.minicolors.css')}}">
<?php
$title = "Change Password";
?>
<style>

    .main_cat .select2-container--default .select2-selection--single {
        background-color: #fff; 
        border: 0px solid #aaa;
        border-radius: 0px;
        width : 100%;
        padding:5px;
    }
    .main_cat .select2-container--default .select2-selection--single .select2-selection__rendered {
        background: #fff;
        padding: 5px;
        height: 40px;
        border: 1px solid #ccc;
    }
    .main_cat .select2-selection__choice,.main_cat .select2-selection__choice__remove{
        color:#fff;
    }
    .card{
        min-height:450px;
        margin-top: 0px;
    }
</style>
<link rel="stylesheet" type="text/css" href="{{ asset('appConfig/css/style.css') }}">
<?php
                                                
if( old('bg_color')!='' ){
    $bg_color = old('bg_color');
}
else if( isset($appSettings->bg_color) && $appSettings->bg_color != ''){
    $bg_color = $appSettings->bg_color;
}else{
    $bg_color = '#70c24a';
}

    
if( old('accent_color')!='' ){
    $accent_color = old('accent_color');
}
else if( isset($appSettings->accent_color) && $appSettings->accent_color != ''){
    $accent_color = $appSettings->accent_color;
}else{
    $accent_color = '#70c24a';
}

     
if( old('button_color')!='' ){
    $button_color = old('button_color');
}
else if( isset($appSettings->button_color) && $appSettings->button_color != ''){
    $button_color = $appSettings->button_color;
}else{
    $button_color = '#70c24a';
}

if( old('button_text_color')!='' ){
    $button_text_color = old('button_text_color');
}
else if( isset($appSettings->button_text_color) && $appSettings->button_text_color != ''){
    $button_text_color = $appSettings->button_text_color;
}else{
    $button_text_color = '#70c24a';
}

if( old('sender_msg_color')!='' ){
    $sender_msg_color = old('sender_msg_color');
}
else if( isset($appSettings->sender_msg_color) && $appSettings->sender_msg_color != ''){
    $sender_msg_color = $appSettings->sender_msg_color;
}else{
    $sender_msg_color = '#70c24a';
}

if( old('sender_msg_text_color')!='' ){
    $sender_msg_text_color = old('sender_msg_text_color');
}
else if( isset($appSettings->sender_msg_text_color) && $appSettings->sender_msg_text_color != ''){
    $sender_msg_text_color = $appSettings->sender_msg_text_color;
}else{
    $sender_msg_text_color = '#70c24a';
}

if( old('my_msg_color')!='' ){
    $my_msg_color = old('my_msg_color');
}
else if( isset($appSettings->my_msg_color) && $appSettings->my_msg_color != ''){
    $my_msg_color = $appSettings->my_msg_color;
}else{
    $my_msg_color = '#70c24a';
}

if( old('my_msg_text_color')!='' ){
    $my_msg_text_color = old('my_msg_text_color');
}
else if( isset($appSettings->my_msg_text_color) && $appSettings->my_msg_text_color != ''){
    $my_msg_text_color = $appSettings->my_msg_text_color;
}else{
    $my_msg_text_color = '#70c24a';
}

if( old('heading_color')!='' ){
    $heading_color = old('heading_color');
}
else if( isset($appSettings->heading_color) && $appSettings->heading_color != ''){
    $heading_color = $appSettings->heading_color;
}else{
    $heading_color = '#70c24a';
}

if( old('sub_heading_color')!='' ){
    $sub_heading_color = old('sub_heading_color');
}
else if( isset($appSettings->sub_heading_color) && $appSettings->sub_heading_color != ''){
    $sub_heading_color = $appSettings->sub_heading_color;
}else{
    $sub_heading_color = '#70c24a';
}

if( old('icon_color')!='' ){
    $icon_color = old('icon_color');
}
else if( isset($appSettings->icon_color) && $appSettings->icon_color != ''){
    $icon_color = $appSettings->icon_color;
}else{
    $icon_color = '#70c24a';
}
if( old('dashboard_icon_color')!='' ){
    $dashboard_icon_color = old('dashboard_icon_color');
}
else if( isset($appSettings->dashboard_icon_color) && $appSettings->dashboard_icon_color != ''){
    $dashboard_icon_color = $appSettings->dashboard_icon_color;
}else{
    $dashboard_icon_color = '#70c24a';
}

if( old('dashboard_icon_background_color')!='' ){
    $dashboard_icon_background_color = old('dashboard_icon_background_color');
}
else if( isset($appSettings->dashboard_icon_background_color) && $appSettings->dashboard_icon_background_color != ''){
    $dashboard_icon_background_color = $appSettings->dashboard_icon_background_color;
}else{
    $dashboard_icon_background_color = '#70c24a';
}
if( old('grid_item_border_color')!='' ){
    $grid_item_border_color = old('grid_item_border_color');
}
else if( isset($appSettings->grid_item_border_color) && $appSettings->grid_item_border_color != ''){
    $grid_item_border_color = $appSettings->grid_item_border_color;
}else{
    $grid_item_border_color = '#70c24a';
}
if( old('grid_border_radius')!='' ){
    $grid_border_radius = old('grid_border_radius');
}
else if( isset($appSettings->grid_border_radius) && $appSettings->grid_border_radius != ''){
    $grid_border_radius = $appSettings->grid_border_radius;
}else{
    $grid_border_radius = '10';
}

if( old('divider_color')!='' ){
    $divider_color = old('divider_color');
}
else if( isset($appSettings->divider_color) && $appSettings->divider_color != ''){
    $divider_color = $appSettings->divider_color;
}else{
    $divider_color = '#70c24a';
}

if( old('dp_border_color')!='' ){
    $dp_border_color = old('dp_border_color');
}
else if( isset($appSettings->dp_border_color) && $appSettings->dp_border_color != ''){
    $dp_border_color = $appSettings->dp_border_color;
}else{
    $dp_border_color = '#70c24a';
}

if( old('text_color')!='' ){
    $text_color = old('text_color');
}
else if( isset($appSettings->text_color) && $appSettings->text_color != ''){
    $text_color = $appSettings->text_color;
}else{
    $text_color = '#70c24a';
}

if( old('inactive_button_color')!='' ){
    $inactive_button_color = old('inactive_button_color');
}
else if( isset($appSettings->inactive_button_color) && $appSettings->inactive_button_color != ''){
    $inactive_button_color = $appSettings->inactive_button_color;
}else{
    $inactive_button_color = '#000000';
}

if( old('inactive_button_text_color')!='' ){
    $inactive_button_text_color = old('inactive_button_text_color');
}
else if( isset($appSettings->inactive_button_text_color) && $appSettings->inactive_button_text_color != ''){
    $inactive_button_text_color = $appSettings->inactive_button_text_color;
}else{
    $inactive_button_text_color = '#ffffff';
}

?>
<section class="rightside-main">
    <div class="container-fluid">
        <div class="page-top">
            <div class="page-header borderless ">
                <h4><?php echo $title;?></h4>   
            </div>
            <div class="page-berdcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard')}}">
                            <i class="fa fa-home"></i> Dashboard
                        </a>
                    </li>
                    <!-- <li class="breadcrumb-item">
                        <a href="{{ route('admin.sounds.index')}}">Sounds Management</a>
                    </li> -->
                    <li class="breadcrumb-item">
                        <a class="active" href="#"><?php echo $title;?></a>
                    </li>
                </ul>       
            </div>
        </div>
        <div class="row">
            <!-- <div class="col-md-3 pr-0">
                @include('includes.admin.settings')
            </div> -->
            <div class="col-md-12 pr-0">
                <div class="row ">
                    <div class="col-md-12 col-lg-12">
                            <div class="card table-card ">
                                <div class="card-header borderless ">
                                
                                        <h3><?php echo $title;?></h3>
                                
                                </div>

                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12">
                                        @if ($message = Session::get('success'))
                                        <div class="alert alert-success alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                            <strong>{{ $message }}</strong>
                                            <?php Session::forget('success');?>
                                        </div>
                                        @endif
                                        @if ($message = Session::get('error'))
                                        <div class="alert alert-danger alert-block">
                                            <button type="button" class="close" data-dismiss="alert">×</button> 
                                            <strong>{!! $message !!}</strong>
                                            <?php Session::forget('error');?>
                                        </div>
                                        @endif
                                        @if (count($errors) > 0)
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        @endif
                                    </div>
                                </div>
                                <form role="form" action="{{url( config('app.admin_url') .'/app-config-settings-update')}}" method="post" enctype="multipart/form-data">                                
                                {{ csrf_field() }}
                            <div class="row">
                          
                                <div class="col-md-8">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 home-main ">
                                            <div id="Home">
                                                <div id="Group_100">
                                                    <svg class="bg">
                                                        <rect rx="0" ry="0" x="0" y="0" width="375" height="812">
                                                        </rect>
                                                    </svg>
                                                    <div id="Scroll_Group_39">
                                                        <img id="Monika_glasgow_Fashion_Photogr" src="{{ asset('appConfig/imgs/Monika_glasgow_Fashion_Photogr.png') }}" srcset="{{ asset('appConfig/imgs/Monika_glasgow_Fashion_Photogr.png') }} 1x, {{ asset('appConfig/imgs/Monika_glasgow_Fashion_Photogr.png') }} 2x">
                                                            
                                                    </div>
                                                    <div id="Bars__Status__Default">
                                                        <div id="Action">
                                                            <div id="_Time">
                                                                <span>9:4</span><span>1</span>
                                                            </div>
                                                        </div>
                                                        <div id="Container">
                                                            <div id="Battery">
                                                                <svg class="Rectangle" viewBox="0 0 24.5 11.5">
                                                                    <path id="Rectangle" d="M 3.589200019836426 11.50020027160645 C 2.34089994430542 11.50020027160645 1.889100074768066 11.36970043182373 1.432800054550171 11.12580013275146 C 0.9765000343322754 10.8818998336792 0.6183000206947327 10.52370071411133 0.3744000196456909 10.0673999786377 C 0.129600003361702 9.611100196838379 0 9.158400535583496 0 7.91100025177002 L 0 3.589200019836426 C 0 2.34089994430542 0.129600003361702 1.889100074768066 0.3744000196456909 1.432800054550171 C 0.6183000206947327 0.9765000343322754 0.9765000343322754 0.6183000206947327 1.432800054550171 0.3744000196456909 C 1.889100074768066 0.129600003361702 2.34089994430542 0 3.589200019836426 0 L 18.410400390625 0 C 19.65870094299316 0 20.11140060424805 0.129600003361702 20.56770133972168 0.3744000196456909 C 21.02400016784668 0.6183000206947327 21.38220024108887 0.9765000343322754 21.62610054016113 1.432800054550171 C 21.8700008392334 1.889100074768066 21.99960136413574 2.34089994430542 21.99960136413574 3.589200019836426 L 21.99960136413574 7.91100025177002 C 21.99960136413574 9.158400535583496 21.8700008392334 9.611100196838379 21.62610054016113 10.0673999786377 C 21.38220024108887 10.52370071411133 21.02400016784668 10.8818998336792 20.56770133972168 11.12580013275146 C 20.11140060424805 11.36970043182373 19.65870094299316 11.50020027160645 18.410400390625 11.50020027160645 L 3.589200019836426 11.50020027160645 Z M 23.00040054321289 3.690000057220459 C 23.00040054321289 3.690000057220459 24.49979972839355 4.453200340270996 24.49979972839355 5.689800262451172 C 24.49979972839355 6.926400184631348 23.00040054321289 7.689599990844727 23.00040054321289 7.689599990844727 L 23.00040054321289 3.690000057220459 Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="Rectangle_">
                                                                    <rect id="Rectangle_" rx="1.600000023841858" ry="1.600000023841858" x="0" y="0" width="18" height="7.667">
                                                                    </rect>
                                                                </svg>
                                                            </div>
                                                            <svg class="Combined_Shape" viewBox="0 0 17.1 10.7">
                                                                <path id="Combined_Shape" d="M 15.30000019073486 10.70009994506836 C 14.63759994506836 10.70009994506836 14.10030078887939 10.16279983520508 14.10030078887939 9.500400543212891 L 14.10030078887939 1.199699997901917 C 14.10030078887939 0.5372999906539917 14.63759994506836 0 15.30000019073486 0 L 15.90030002593994 0 C 16.56270027160645 0 17.10000038146973 0.5372999906539917 17.10000038146973 1.199699997901917 L 17.10000038146973 9.500400543212891 C 17.10000038146973 10.16279983520508 16.56270027160645 10.70009994506836 15.90030002593994 10.70009994506836 L 15.30000019073486 10.70009994506836 Z M 10.60020065307617 10.70009994506836 C 9.93690013885498 10.70009994506836 9.399600028991699 10.16279983520508 9.399600028991699 9.500400543212891 L 9.399600028991699 3.600000143051147 C 9.399600028991699 2.937600135803223 9.93690013885498 2.400300025939941 10.60020065307617 2.400300025939941 L 11.19960021972656 2.400300025939941 C 11.86290073394775 2.400300025939941 12.40019989013672 2.937600135803223 12.40019989013672 3.600000143051147 L 12.40019989013672 9.500400543212891 C 12.40019989013672 10.16279983520508 11.86290073394775 10.70009994506836 11.19960021972656 10.70009994506836 L 10.60020065307617 10.70009994506836 Z M 6.00029993057251 10.70009994506836 C 5.336999893188477 10.70009994506836 4.799700260162354 10.16279983520508 4.799700260162354 9.500400543212891 L 4.799700260162354 5.900400161743164 C 4.799700260162354 5.237100124359131 5.336999893188477 4.69980001449585 6.00029993057251 4.69980001449585 L 6.599699974060059 4.69980001449585 C 7.263000011444092 4.69980001449585 7.800300121307373 5.237100124359131 7.800300121307373 5.900400161743164 L 7.800300121307373 9.500400543212891 C 7.800300121307373 10.16279983520508 7.263000011444092 10.70009994506836 6.599699974060059 10.70009994506836 L 6.00029993057251 10.70009994506836 Z M 1.199699997901917 10.70009994506836 C 0.5372999906539917 10.70009994506836 0 10.16279983520508 0 9.500400543212891 L 0 7.900200366973877 C 0 7.236900329589844 0.5372999906539917 6.699600219726563 1.199699997901917 6.699600219726563 L 1.800000071525574 6.699600219726563 C 2.462399959564209 6.699600219726563 2.99970006942749 7.236900329589844 2.99970006942749 7.900200366973877 L 2.99970006942749 9.500400543212891 C 2.99970006942749 10.16279983520508 2.462399959564209 10.70009994506836 1.800000071525574 10.70009994506836 L 1.199699997901917 10.70009994506836 Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="Wi-Fi" viewBox="0 0 15.4 11.057">
                                                                <path id="Wi-Fi" d="M 7.700400352478027 11.05740451812744 C 7.617140293121338 11.05740451812744 7.53579044342041 11.02328395843506 7.477200031280518 10.96380424499512 L 5.462100028991699 8.931604385375977 C 5.400250434875488 8.870654106140137 5.365800380706787 8.785684585571289 5.367600440979004 8.698504447937012 C 5.36939001083374 8.61208438873291 5.407440185546875 8.529094696044922 5.472000122070313 8.470804214477539 C 6.094020366668701 7.944544315338135 6.885400295257568 7.654734134674072 7.700400352478027 7.654734134674072 C 8.515399932861328 7.654734134674072 9.306790351867676 7.944554328918457 9.928800582885742 8.470804214477539 C 9.993690490722656 8.529394149780273 10.03141021728516 8.612374305725098 10.03229999542236 8.698504447937012 C 10.03410053253174 8.785684585571289 9.999650001525879 8.870644569396973 9.937800407409668 8.931604385375977 L 7.923600196838379 10.96380424499512 C 7.865010261535645 11.02328395843506 7.783660411834717 11.05740451812744 7.700400352478027 11.05740451812744 Z M 11.23712062835693 7.490284442901611 C 11.15659046173096 7.490284442901611 11.08030033111572 7.459754467010498 11.02229976654053 7.404304504394531 C 10.1098804473877 6.578444480895996 8.930130004882813 6.123604297637939 7.700400352478027 6.123604297637939 C 6.471510410308838 6.124504089355469 5.292730331420898 6.579334259033203 4.381200313568115 7.404304504394531 C 4.322770118713379 7.459744453430176 4.246370315551758 7.490284442901611 4.166070461273193 7.490284442901611 C 4.082390308380127 7.490294456481934 4.003770351409912 7.457524299621582 3.944700241088867 7.398004531860352 L 2.780100345611572 6.221704483032227 C 2.719150304794312 6.160754203796387 2.684710264205933 6.076114177703857 2.685600280761719 5.989504337310791 C 2.686490297317505 5.903304100036621 2.722580194473267 5.819324493408203 2.784600257873535 5.759104251861572 C 4.12483024597168 4.512454509735107 5.870980262756348 3.825904369354248 7.701410293579102 3.825904369354248 C 9.531840324401855 3.825904369354248 11.27824020385742 4.51246452331543 12.61890029907227 5.759104251861572 C 12.68093013763428 5.819334506988525 12.71701049804688 5.903304100036621 12.71790027618408 5.989504337310791 C 12.71879005432129 6.076114177703857 12.68435001373291 6.160754203796387 12.62340068817139 6.221704483032227 L 11.45880031585693 7.398004531860352 C 11.39974021911621 7.45751428604126 11.32101058959961 7.490284442901611 11.23712062835693 7.490284442901611 Z M 13.92010021209717 4.782724380493164 C 13.83860015869141 4.782724380493164 13.76164054870605 4.751354217529297 13.70340061187744 4.694394111633301 C 12.0759105682373 3.14829421043396 9.944000244140625 2.296804428100586 7.700400352478027 2.296804428100586 C 5.454940319061279 2.296804428100586 3.323030233383179 3.14829421043396 1.697400212287903 4.694404125213623 C 1.638720273971558 4.751354217529297 1.56147027015686 4.782724380493164 1.479910254478455 4.782724380493164 C 1.39650022983551 4.782724380493164 1.318400263786316 4.750084400177002 1.260000228881836 4.690804481506348 L 0.09360022842884064 3.514504432678223 C 0.03323023021221161 3.453224420547485 -0.0008797682239674032 3.369254350662231 2.317810015028954e-07 3.284104347229004 C 0.0009002317674458027 3.196994304656982 0.03542023152112961 3.115484237670898 0.09720022976398468 3.054604291915894 C 2.152600288391113 1.084964275360107 4.852640151977539 0.0002343157975701615 7.699950218200684 0.0002343157975701615 C 10.54726028442383 0.0002343157975701615 13.24730014801025 1.084964275360107 15.30270004272461 3.054604291915894 C 15.36538028717041 3.116374254226685 15.39990043640137 3.197874307632446 15.39990043640137 3.284104347229004 C 15.40080070495605 3.370834350585938 15.3672399520874 3.452654361724854 15.30539989471436 3.514504432678223 L 14.13990020751953 4.690804481506348 C 14.08150005340576 4.750084400177002 14.00343990325928 4.782724380493164 13.92010021209717 4.782724380493164 Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <!-- <div id="Background">
                                                        <div id="_Divider">
                                                            <div id="Muted">
                                                                <svg class="Divider" viewBox="0 -0.5 375 0.5">
                                                                    <path id="Divider" d="M 0 0 L 375 0 L 375 -0.5 L 0 -0.5 L 0 0 Z">
                                                                    </path>
                                                                </svg>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <img id="p2" src="{{ asset('appConfig/imgs/p2.jpg') }}" srcset="{{ asset('appConfig/imgs/p2.jpg') }} 1x, {{ asset('appConfig/imgs/p2.jpg') }} 2x" style="border-color : {{ $dp_border_color }}">
                                                    <span class="follow-btn" style="background: {{ $button_color }}; color:{{ $button_text_color }}">Follow</span>
                                                    <div id="Component_50__1" class="Component_50___1">
                                                        <div id="Group_64">
                                                            <div id="_Icons__Share">
                                                                <svg class="ID11_Share" viewBox="0 0 20 20">
                                                                    <path style="fill: {{$dashboard_icon_color}}" onclick="application.goToTargetView(event)" id="ID11_Share" d="M 16.42869758605957 12.85801124572754 C 15.50487422943115 12.85710716247559 14.61694622039795 13.21569347381592 13.95283222198486 13.85787868499756 L 7.115637302398682 10.43928050994873 C 7.115637302398682 10.29644298553467 7.144205570220947 10.14884376525879 7.144205570220947 10.00124359130859 C 7.144205570220947 9.853644371032715 7.144205570220947 9.70604419708252 7.115637302398682 9.563205718994141 L 13.95283222198486 6.144608020782471 C 15.17596912384033 7.321434020996094 17.05847549438477 7.47465991973877 18.45582389831543 6.511126518249512 C 19.85317420959473 5.547593593597412 20.37919044494629 3.733589649200439 19.71406555175781 2.171990871429443 C 19.0489387512207 0.6103920340538025 17.37648963928223 -0.267229288816452 15.71353244781494 0.07270219922065735 C 14.05057430267334 0.4126336872577667 12.85669136047363 1.876172661781311 12.85773944854736 3.573518037796021 C 12.85773944854736 3.721117734909058 12.85773944854736 3.868717432022095 12.88630676269531 4.011555671691895 L 6.049110889434814 7.430153369903564 C 4.641441345214844 6.073366641998291 2.404422521591187 6.100814819335938 1.030466675758362 7.491732120513916 C -0.3434889018535614 8.882650375366211 -0.3434889018535614 11.11983776092529 1.030466675758362 12.51075458526611 C 2.404422521591187 13.90167236328125 4.641441345214844 13.92912006378174 6.049110889434814 12.57233333587646 L 12.88630676269531 15.99093151092529 C 12.88630676269531 16.13376998901367 12.85773944854736 16.28137016296387 12.85773944854736 16.42896842956543 C 12.85773944854736 18.40115547180176 14.45651149749756 19.99992752075195 16.42869758605957 19.99992752075195 C 18.40088272094727 19.99992752075195 19.99965667724609 18.40115547180176 19.99965667724609 16.42896842956543 C 19.99965667724609 14.45678329467773 18.40088272094727 12.85801124572754 16.42869758605957 12.85801124572754 Z">
                                                                    </path>
                                                                </svg>
                                                                <div class="like">
                                                                <!-- <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $dashboard_icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg> -->
                                                                
                                                                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                    <g>
                                                                        <g>
                                                                            <path style="fill : {{ $dashboard_icon_color }}" d="M249.84,214.214l-31.738-67.439c-1.935-4.112-1.95-8.87-0.041-12.994l34.253-73.984
                                                                                c-10.42-10.775-22.287-19.947-35.115-27.052c-20.963-11.611-44.601-17.749-68.359-17.749C66.769,14.996,0,86.431,0,174.237
                                                                                c0,26.041,6.007,51.882,17.356,74.699c42.689,86.282,103.057,150.191,146.184,188.611c35.387,31.525,64.855,51.302,77.79,59.458
                                                                                l-23.452-54.791c-1.726-4.034-1.646-8.614,0.223-12.584l31.738-67.448l-31.738-67.445c-1.95-4.142-1.95-8.939,0-13.081
                                                                                L249.84,214.214z"/>
                                                                        </g>
                                                                    </g>
                                                                    <g>
                                                                        <g>
                                                                            <path style="fill : {{ $dashboard_icon_color }}" d="M363.16,14.996c-21.839,0-43.57,5.199-63.222,15.055l-50.988,110.13l31.762,67.492c1.949,4.142,1.949,8.939,0,13.081
                                                                                l-31.738,67.443l31.738,67.445c1.949,4.142,1.949,8.937,0,13.08l-31.878,67.746l25.037,58.494
                                                                                c14.208-9.161,41.863-28.261,74.588-57.415c43.126-38.419,103.495-102.328,146.169-188.581
                                                                                C505.993,226.119,512,200.279,512,174.237C512,86.431,445.231,14.996,363.16,14.996z"/>
                                                                        </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                                
                                                                <!-- <i style="color : {{ $dashboard_icon_color }}" class="fa fa-heart" aria-hidden="true"></i> -->
                                                                </div>
                                                                
                                                                    
                                                            </div>
                                                            <div id="ID125k" style="color:{{$text_color}}">
                                                                <span>5k</span>
                                                            </div>
                                                        </div>
                                                        <div onclick="application.goToTargetView(event)" id="Group_59">
                                                            <div id="ID38k" style="color:{{$text_color}}">
                                                                <span>2.8</span><span>k</span>
                                                            </div>
                                                            <div class="like">
                                                            <!-- <svg enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $dashboard_icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg> -->
                                                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                    viewBox="0 0 239.988 239.988"  xml:space="preserve">
                                                                <g>
                                                                    <path style="fill : {{ $dashboard_icon_color }}" d="M201.61,12.361H38.394C15.915,12.361,0,27.629,0,50.745v85.323C0,157.361,14.734,174.5,38.394,174.5
                                                                        h9.197c5.08,0,10.122,4.781,11.248,10.682l7.109,36.991c1.126,5.901,5.472,7.218,9.687,2.943l42.332-42.876
                                                                        c4.226-4.275,12.515-7.74,18.525-7.74h65.111c23.105,0,38.383-18.906,38.383-38.432V50.745
                                                                        C239.988,28.265,223.491,12.361,201.61,12.361z M48.413,111.216c-9.763,0-17.677-7.914-17.677-17.677s7.914-17.677,17.677-17.677
                                                                        S66.09,83.776,66.09,93.539S58.171,111.216,48.413,111.216z M115.667,105.777c-6.755,0-12.238-5.483-12.238-12.238
                                                                        c0-6.755,5.483-12.238,12.238-12.238c6.755,0,12.238,5.483,12.238,12.238C127.905,100.295,122.422,105.777,115.667,105.777z
                                                                        M191.58,111.216c-9.763,0-17.677-7.914-17.677-17.677s7.914-17.677,17.677-17.677s17.677,7.914,17.677,17.677
                                                                        S201.343,111.216,191.58,111.216z"/></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                            
                                                            <!-- <i style="color : {{ $dashboard_icon_color }}" class="fa fa-commenting" aria-hidden="true"></i> -->
                                                            </div>
                                                                
                                                        </div>
                                                        <div id="Group_63">
                                                            <div id="ID125k_bn" style="color:{{$text_color}}">
                                                                <span>11.2</span><span>k</span>
                                                            </div>
                                                            <div id="Icons__Filled__Views_Copy">
                                                                <div id="Group_14">
                                                                    
                                                                        
                                                                    <!-- </svg> -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="Group_67">
                                                        <!-- <svg enable-background="new 0 0 512 512" id="Path_281" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $dashboard_icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg> -->
                                                            
                                                        <svg version="1.1" id="Path_281" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                            <g>
                                                                <g>
                                                                    <path style="fill : {{ $dashboard_icon_color }}" d="M501.362,383.95L320.497,51.474c-29.059-48.921-99.896-48.986-128.994,0L10.647,383.95
                                                                        c-29.706,49.989,6.259,113.291,64.482,113.291h361.736C495.039,497.241,531.068,433.99,501.362,383.95z M256,437.241
                                                                        c-16.538,0-30-13.462-30-30c0-16.538,13.462-30,30-30c16.538,0,30,13.462,30,30C286,423.779,272.538,437.241,256,437.241z
                                                                        M286,317.241c0,16.538-13.462,30-30,30c-16.538,0-30-13.462-30-30v-150c0-16.538,13.462-30,30-30c16.538,0,30,13.462,30,30
                                                                        V317.241z"/>
                                                                </g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                        <!-- <svg class="Path_281" viewBox="0 0 21.389 17.309">
                                                                
                                                                <i id="Path_281" style="color : {{ $dashboard_icon_color }}" class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                                                            </svg> -->
                                                        </div>
                                                    </div>
                                                    <div id="Component_53__1" class="Component_53___1">
                                                        <div id="Following">
                                                            <span>Following</span>
                                                        </div>
                                                        <div id="Featured" style="color:{{$text_color}}">
                                                            <span>Featured</span>
                                                        </div>
                                                        <svg class="Line_12" viewBox="0 0 1 26">
                                                            <path id="Line_12" d="M 0 0 L 0 26">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div id="Component_49__1" class="Component_49___1">
                                                        <div id="Group_89">
                                                            <div id="Group_88">
                                                                <div id="Group_87">
                                                                    <div id="Willie_Singleton" style="color:{{ $text_color }}">
                                                                        <span>@Garima Chaurasia</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div id="My_talent_my_dance" style="color:{{ $text_color }}">
                                                            <span>My talent my dance</span>
                                                        </div>
                                                    </div>
                                                    <div id="plus-icon">
                                                        <i class="fa fa-plus-circle" aria-hidden="true" style="background-color : {{ $dashboard_icon_color }};color: {{$dashboard_icon_background_color}}"></i>
                                                    </div>
                                                        
                                                    <svg class="Rectangle_118">
                                                        <rect id="Rectangle_118" rx="0" ry="0" x="0" y="0" width="1.52" height="5.321">
                                                        </rect>
                                                    </svg>
                                                    <svg class="Ellipse_163">
                                                        <ellipse id="Ellipse_163" rx="1" ry="1" cx="1" cy="1">
                                                        </ellipse>
                                                    </svg>
                                                    <!-- <i id="home"  class="fa fa-home" aria-hidden="true" style="color : {{ $dashboard_icon_color }}"></i> -->
                                                    <svg version="1.1" id="home" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 306.773 306.773" style="enable-background:new 0 0 306.773 306.773;" xml:space="preserve">
                                                    <g>
                                                        <path style="fill : {{ $dashboard_icon_color }}" d="M302.93,149.794c5.561-6.116,5.024-15.49-1.199-20.932L164.63,8.898
                                                            c-6.223-5.442-16.2-5.328-22.292,0.257L4.771,135.258c-6.092,5.585-6.391,14.947-0.662,20.902l3.449,3.592
                                                            c5.722,5.955,14.971,6.665,20.645,1.581l10.281-9.207v134.792c0,8.27,6.701,14.965,14.965,14.965h53.624
                                                            c8.264,0,14.965-6.695,14.965-14.965v-94.3h68.398v94.3c-0.119,8.264,5.794,14.959,14.058,14.959h56.828
                                                            c8.264,0,14.965-6.695,14.965-14.965V154.024c0,0,2.84,2.488,6.343,5.567c3.497,3.073,10.842,0.609,16.403-5.513L302.93,149.794z"
                                                            /></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                    
                                                    <svg version="1.1" id="hash-tag" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                        viewBox="0 0 281.465 281.465" style="enable-background:new 0 0 281.465 281.465;" xml:space="preserve">
                                                    <path style="fill : {{ $dashboard_icon_color }}" d="M273.661,114.318V67.035h-45.558L236.886,0h-47.69l-8.783,67.035h-60.084L129.113,0H81.425L72.64,67.035H7.804v47.283
                                                        h58.649l-6.904,52.791H7.804v47.289h45.559l-8.784,67.066h47.687l8.787-67.066h60.083l-8.786,67.066h47.691l8.783-67.066h64.836
                                                        v-47.289h-58.647l6.901-52.791H273.661z M167.326,167.109h-60.084l6.9-52.791h60.082L167.326,167.109z"/>
                                                    <g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                    
                                                    <svg version="1.1" id="message-icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                                            viewBox="0 0 416.043 416.043" style="enable-background:new 0 0 416.043 416.043;" xml:space="preserve">
                                                        <g>
                                                            <g>
                                                                <path style="fill : {{ $dashboard_icon_color }}" d="M208.86,80.696C84.671,76.046-3.953,136.891,0.136,214.624c0,51.973,70.945,99.063,141.394,115.228
                                                                    c0,0-0.357,20.263-24.416,53.068c52.804-9.686,91.313-46.161,91.313-46.161s16.252-0.813,17.884-0.87
                                                                    c91.267-5.813,162.656-56.548,162.656-118.37C388.967,151.903,308.305,80.696,208.86,80.696z M111.467,236.684
                                                                    c-16.106,0-29.188-13.035-29.188-29.181c0-16.122,13.082-29.196,29.188-29.196c16.138,0,29.22,13.074,29.22,29.196
                                                                    C140.688,223.648,127.605,236.684,111.467,236.684z M191.467,236.684c-16.105,0-29.188-13.035-29.188-29.181
                                                                    c0-16.122,13.082-29.196,29.188-29.196c16.138,0,29.222,13.074,29.222,29.196C220.689,223.648,207.605,236.684,191.467,236.684z
                                                                    M271.468,236.684c-16.105,0-29.188-13.035-29.188-29.181c0-16.122,13.082-29.196,29.188-29.196
                                                                    c16.139,0,29.221,13.074,29.221,29.196C300.689,223.648,287.607,236.684,271.468,236.684z"/>
                                                                <path style="fill : {{ $dashboard_icon_color }}" d="M272.189,33.322c-53.318-1.995-98.421,11.129-128.234,33.334c23.07-4.393,48.248-6.32,75.021-5.318
                                                                    c92.221,0,168.932,58.788,184.655,119.916c7.976-11.806,12.412-24.883,12.412-38.65C416.042,90.196,351.617,33.322,272.189,33.322
                                                                    z"/>	</g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                                                    
                                                    <!-- <svg id="me-icon" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $dashboard_icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg> -->
                                                    <svg id="me-icon" viewBox="-42 0 512 512.002" xmlns="http://www.w3.org/2000/svg"><path style="fill : {{ $dashboard_icon_color }}" d="m210.351562 246.632812c33.882813 0 63.222657-12.152343 87.195313-36.128906 23.972656-23.972656 36.125-53.304687 36.125-87.191406 0-33.875-12.152344-63.210938-36.128906-87.191406-23.976563-23.96875-53.3125-36.121094-87.191407-36.121094-33.886718 0-63.21875 12.152344-87.191406 36.125s-36.128906 53.308594-36.128906 87.1875c0 33.886719 12.15625 63.222656 36.132812 87.195312 23.976563 23.96875 53.3125 36.125 87.1875 36.125zm0 0"/><path style="fill : {{ $dashboard_icon_color }}" d="m426.128906 393.703125c-.691406-9.976563-2.089844-20.859375-4.148437-32.351563-2.078125-11.578124-4.753907-22.523437-7.957031-32.527343-3.308594-10.339844-7.808594-20.550781-13.371094-30.335938-5.773438-10.15625-12.554688-19-20.164063-26.277343-7.957031-7.613282-17.699219-13.734376-28.964843-18.199219-11.226563-4.441407-23.667969-6.691407-36.976563-6.691407-5.226563 0-10.28125 2.144532-20.042969 8.5-6.007812 3.917969-13.035156 8.449219-20.878906 13.460938-6.707031 4.273438-15.792969 8.277344-27.015625 11.902344-10.949219 3.542968-22.066406 5.339844-33.039063 5.339844-10.972656 0-22.085937-1.796876-33.046874-5.339844-11.210938-3.621094-20.296876-7.625-26.996094-11.898438-7.769532-4.964844-14.800782-9.496094-20.898438-13.46875-9.75-6.355468-14.808594-8.5-20.035156-8.5-13.3125 0-25.75 2.253906-36.972656 6.699219-11.257813 4.457031-21.003906 10.578125-28.96875 18.199219-7.605469 7.28125-14.390625 16.121094-20.15625 26.273437-5.558594 9.785157-10.058594 19.992188-13.371094 30.339844-3.199219 10.003906-5.875 20.945313-7.953125 32.523437-2.058594 11.476563-3.457031 22.363282-4.148437 32.363282-.679688 9.796875-1.023438 19.964844-1.023438 30.234375 0 26.726562 8.496094 48.363281 25.25 64.320312 16.546875 15.746094 38.441406 23.734375 65.066406 23.734375h246.53125c26.625 0 48.511719-7.984375 65.0625-23.734375 16.757813-15.945312 25.253906-37.585937 25.253906-64.324219-.003906-10.316406-.351562-20.492187-1.035156-30.242187zm0 0"/></svg>
                                                    <!-- <i  id="hash-tag" style="color : {{ $dashboard_icon_color }}" class="fa fa-hashtag" aria-hidden="true"></i> -->
                                                        
                                                    
                                                    <!-- <i id="message-icon" class="fa fa-commenting" aria-hidden="true" style="color : {{ $dashboard_icon_color }}"></i> -->
                                    
                                                    <!-- <i id="me-icon" class="fa fa-user" aria-hidden="true" style="color : {{ $dashboard_icon_color }}"></i> -->
                                    
                                                    <div class="video-icon">
                                                    <svg id="play" fill="none" height="512" viewBox="0 0 24 24" width="512" xmlns="http://www.w3.org/2000/svg"><g fill="{{ $dashboard_icon_color }}"><path d="m2.75 12c0-5.10863 4.14137-9.25 9.25-9.25 5.1086 0 9.25 4.14137 9.25 9.25 0 1.1403-.206 2.2308-.5822 3.2375-.1449.388.0521.8201.4401.9651.388.1449.8201-.0521.965-.4401.438-1.172.6771-2.4402.6771-3.7625 0-5.93706-4.8129-10.75-10.75-10.75-5.93706 0-10.75 4.81294-10.75 10.75 0 5.9371 4.81294 10.75 10.75 10.75.5473 0 1.0855-.041 1.6116-.1201.4096-.0616.6917-.4436.6301-.8532-.0617-.4096-.4437-.6917-.8533-.6301-.4524.0681-.9161.1034-1.3884.1034-5.10863 0-9.25-4.1414-9.25-9.25z"/><path d="m16 18.25c-.4142 0-.75.3358-.75.75s.3358.75.75.75h1.25v1.25c0 .4142.3358.75.75.75s.75-.3358.75-.75v-1.25h1.25c.4142 0 .75-.3358.75-.75s-.3358-.75-.75-.75h-1.25v-1.25c0-.4142-.3358-.75-.75-.75s-.75.3358-.75.75v1.25z"/><path d="m9.63048 8.34735c.23513-.13313.52372-.12949.75542.00953l5 3.00002c.2259.1355.3641.3797.3641.6431s-.1382.5076-.3641.6431l-5 3c-.2317.139-.52029.1427-.75542.0095-.23514-.1331-.38048-.3824-.38048-.6526v-6c0-.2702.14534-.51952.38048-.65265z"/></g></svg>
                                                        <!-- <i id="play" class="fa fa-video-camera" aria-hidden="true" style="color : {{ $dashboard_icon_color }};background: {{ $dashboard_icon_background_color }}"></i> -->
                                                    </div>
                                                        
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 ">
                                            <div id="Profile">
                                                <svg class="bg">
                                                    <rect id="bg" style="fill: {{$bg_color}}" rx="0" ry="0" x="0" y="0" width="375" height="812">
                                                    </rect>
                                                </svg>
                                                <div id="Bars__Status__Default">
                                                    <div id="Action">
                                                        <div id="_Time">
                                                            <span>9:4</span><span>1</span>
                                                        </div>
                                                    </div>
                                                    <div id="Container">
                                                        <div id="Battery">
                                                            <svg class="Rectangle" viewBox="0 0 24.5 11.5">
                                                                <path id="Rectangle" d="M 3.589200019836426 11.50020027160645 C 2.34089994430542 11.50020027160645 1.889100074768066 11.36970043182373 1.432800054550171 11.12580013275146 C 0.9765000343322754 10.8818998336792 0.6183000206947327 10.52370071411133 0.3744000196456909 10.0673999786377 C 0.129600003361702 9.611100196838379 0 9.158400535583496 0 7.91100025177002 L 0 3.589200019836426 C 0 2.34089994430542 0.129600003361702 1.889100074768066 0.3744000196456909 1.432800054550171 C 0.6183000206947327 0.9765000343322754 0.9765000343322754 0.6183000206947327 1.432800054550171 0.3744000196456909 C 1.889100074768066 0.129600003361702 2.34089994430542 0 3.589200019836426 0 L 18.410400390625 0 C 19.65870094299316 0 20.11140060424805 0.129600003361702 20.56770133972168 0.3744000196456909 C 21.02400016784668 0.6183000206947327 21.38220024108887 0.9765000343322754 21.62610054016113 1.432800054550171 C 21.8700008392334 1.889100074768066 21.99960136413574 2.34089994430542 21.99960136413574 3.589200019836426 L 21.99960136413574 7.91100025177002 C 21.99960136413574 9.158400535583496 21.8700008392334 9.611100196838379 21.62610054016113 10.0673999786377 C 21.38220024108887 10.52370071411133 21.02400016784668 10.8818998336792 20.56770133972168 11.12580013275146 C 20.11140060424805 11.36970043182373 19.65870094299316 11.50020027160645 18.410400390625 11.50020027160645 L 3.589200019836426 11.50020027160645 Z M 23.00040054321289 3.690000057220459 C 23.00040054321289 3.690000057220459 24.49979972839355 4.453200340270996 24.49979972839355 5.689800262451172 C 24.49979972839355 6.926400184631348 23.00040054321289 7.689599990844727 23.00040054321289 7.689599990844727 L 23.00040054321289 3.690000057220459 Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="Rectangle_">
                                                                <rect id="Rectangle_" rx="1.600000023841858" ry="1.600000023841858" x="0" y="0" width="18" height="7.667">
                                                                </rect>
                                                            </svg>
                                                        </div>
                                                        <svg class="Combined_Shape" viewBox="0 0 17.1 10.7">
                                                            <path id="Combined_Shape" d="M 15.30000019073486 10.70009994506836 C 14.63759994506836 10.70009994506836 14.10030078887939 10.16279983520508 14.10030078887939 9.500400543212891 L 14.10030078887939 1.199699997901917 C 14.10030078887939 0.5372999906539917 14.63759994506836 0 15.30000019073486 0 L 15.90030002593994 0 C 16.56270027160645 0 17.10000038146973 0.5372999906539917 17.10000038146973 1.199699997901917 L 17.10000038146973 9.500400543212891 C 17.10000038146973 10.16279983520508 16.56270027160645 10.70009994506836 15.90030002593994 10.70009994506836 L 15.30000019073486 10.70009994506836 Z M 10.60020065307617 10.70009994506836 C 9.93690013885498 10.70009994506836 9.399600028991699 10.16279983520508 9.399600028991699 9.500400543212891 L 9.399600028991699 3.600000143051147 C 9.399600028991699 2.937600135803223 9.93690013885498 2.400300025939941 10.60020065307617 2.400300025939941 L 11.19960021972656 2.400300025939941 C 11.86290073394775 2.400300025939941 12.40019989013672 2.937600135803223 12.40019989013672 3.600000143051147 L 12.40019989013672 9.500400543212891 C 12.40019989013672 10.16279983520508 11.86290073394775 10.70009994506836 11.19960021972656 10.70009994506836 L 10.60020065307617 10.70009994506836 Z M 6.00029993057251 10.70009994506836 C 5.336999893188477 10.70009994506836 4.799700260162354 10.16279983520508 4.799700260162354 9.500400543212891 L 4.799700260162354 5.900400161743164 C 4.799700260162354 5.237100124359131 5.336999893188477 4.69980001449585 6.00029993057251 4.69980001449585 L 6.599699974060059 4.69980001449585 C 7.263000011444092 4.69980001449585 7.800300121307373 5.237100124359131 7.800300121307373 5.900400161743164 L 7.800300121307373 9.500400543212891 C 7.800300121307373 10.16279983520508 7.263000011444092 10.70009994506836 6.599699974060059 10.70009994506836 L 6.00029993057251 10.70009994506836 Z M 1.199699997901917 10.70009994506836 C 0.5372999906539917 10.70009994506836 0 10.16279983520508 0 9.500400543212891 L 0 7.900200366973877 C 0 7.236900329589844 0.5372999906539917 6.699600219726563 1.199699997901917 6.699600219726563 L 1.800000071525574 6.699600219726563 C 2.462399959564209 6.699600219726563 2.99970006942749 7.236900329589844 2.99970006942749 7.900200366973877 L 2.99970006942749 9.500400543212891 C 2.99970006942749 10.16279983520508 2.462399959564209 10.70009994506836 1.800000071525574 10.70009994506836 L 1.199699997901917 10.70009994506836 Z">
                                                            </path>
                                                        </svg>
                                                        <svg class="Wi-Fi" viewBox="0 0 15.4 11.057">
                                                            <path id="Wi-Fi" d="M 7.700400352478027 11.05740451812744 C 7.617140293121338 11.05740451812744 7.53579044342041 11.02328395843506 7.477200031280518 10.96380424499512 L 5.462100028991699 8.931604385375977 C 5.400250434875488 8.870654106140137 5.365800380706787 8.785684585571289 5.367600440979004 8.698504447937012 C 5.36939001083374 8.61208438873291 5.407440185546875 8.529094696044922 5.472000122070313 8.470804214477539 C 6.094020366668701 7.944544315338135 6.885400295257568 7.654734134674072 7.700400352478027 7.654734134674072 C 8.515399932861328 7.654734134674072 9.306790351867676 7.944554328918457 9.928800582885742 8.470804214477539 C 9.993690490722656 8.529394149780273 10.03141021728516 8.612374305725098 10.03229999542236 8.698504447937012 C 10.03410053253174 8.785684585571289 9.999650001525879 8.870644569396973 9.937800407409668 8.931604385375977 L 7.923600196838379 10.96380424499512 C 7.865010261535645 11.02328395843506 7.783660411834717 11.05740451812744 7.700400352478027 11.05740451812744 Z M 11.23712062835693 7.490284442901611 C 11.15659046173096 7.490284442901611 11.08030033111572 7.459754467010498 11.02229976654053 7.404304504394531 C 10.1098804473877 6.578444480895996 8.930130004882813 6.123604297637939 7.700400352478027 6.123604297637939 C 6.471510410308838 6.124504089355469 5.292730331420898 6.579334259033203 4.381200313568115 7.404304504394531 C 4.322770118713379 7.459744453430176 4.246370315551758 7.490284442901611 4.166070461273193 7.490284442901611 C 4.082390308380127 7.490294456481934 4.003770351409912 7.457524299621582 3.944700241088867 7.398004531860352 L 2.780100345611572 6.221704483032227 C 2.719150304794312 6.160754203796387 2.684710264205933 6.076114177703857 2.685600280761719 5.989504337310791 C 2.686490297317505 5.903304100036621 2.722580194473267 5.819324493408203 2.784600257873535 5.759104251861572 C 4.12483024597168 4.512454509735107 5.870980262756348 3.825904369354248 7.701410293579102 3.825904369354248 C 9.531840324401855 3.825904369354248 11.27824020385742 4.51246452331543 12.61890029907227 5.759104251861572 C 12.68093013763428 5.819334506988525 12.71701049804688 5.903304100036621 12.71790027618408 5.989504337310791 C 12.71879005432129 6.076114177703857 12.68435001373291 6.160754203796387 12.62340068817139 6.221704483032227 L 11.45880031585693 7.398004531860352 C 11.39974021911621 7.45751428604126 11.32101058959961 7.490284442901611 11.23712062835693 7.490284442901611 Z M 13.92010021209717 4.782724380493164 C 13.83860015869141 4.782724380493164 13.76164054870605 4.751354217529297 13.70340061187744 4.694394111633301 C 12.0759105682373 3.14829421043396 9.944000244140625 2.296804428100586 7.700400352478027 2.296804428100586 C 5.454940319061279 2.296804428100586 3.323030233383179 3.14829421043396 1.697400212287903 4.694404125213623 C 1.638720273971558 4.751354217529297 1.56147027015686 4.782724380493164 1.479910254478455 4.782724380493164 C 1.39650022983551 4.782724380493164 1.318400263786316 4.750084400177002 1.260000228881836 4.690804481506348 L 0.09360022842884064 3.514504432678223 C 0.03323023021221161 3.453224420547485 -0.0008797682239674032 3.369254350662231 2.317810015028954e-07 3.284104347229004 C 0.0009002317674458027 3.196994304656982 0.03542023152112961 3.115484237670898 0.09720022976398468 3.054604291915894 C 2.152600288391113 1.084964275360107 4.852640151977539 0.0002343157975701615 7.699950218200684 0.0002343157975701615 C 10.54726028442383 0.0002343157975701615 13.24730014801025 1.084964275360107 15.30270004272461 3.054604291915894 C 15.36538028717041 3.116374254226685 15.39990043640137 3.197874307632446 15.39990043640137 3.284104347229004 C 15.40080070495605 3.370834350585938 15.3672399520874 3.452654361724854 15.30539989471436 3.514504432678223 L 14.13990020751953 4.690804481506348 C 14.08150005340576 4.750084400177002 14.00343990325928 4.782724380493164 13.92010021209717 4.782724380493164 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div id="Background">
                                                    <div id="_Divider">
                                                        <div id="Muted">
                                                            <svg class="Divider" viewBox="0 -0.5 375 0.5">
                                                                <path id="Divider" d="M 0 0 L 375 0 L 375 -0.5 L 0 -0.5 L 0 0 Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="Background_bb">
                                                    <div id="_Divider_bc">
                                                        <div id="Muted_bd">
                                                            <svg class="Divider_be" viewBox="0 -0.5 375 0.5">
                                                                <path id="Divider_be" d="M 0 0 L 375 0 L 375 -0.5 L 0 -0.5 L 0 0 Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <i id="right_arrow-512" style="color: {{$icon_color}}" class="fa fa-angle-left" aria-hidden="true"></i>
                                                    
                                                
                                                <i id="more-vertical-menu-dots-512" style="color: {{$icon_color}}" class="fa fa-ellipsis-v" aria-hidden="true"></i>
                                                    
                                                <div id="Annika" style="color: {{$heading_color}}">
                                                    <span>Annika</span>
                                                </div>
                                                <svg class="Rectangle_136">
                                                    <rect id="Rectangle_136" style="fill: {{$button_color}}" rx="0" ry="0" x="0" y="0" width="103" height="26">
                                                    </rect>
                                                </svg>
                                                <svg class="Rectangle_171">
                                                    <rect id="Rectangle_171" style="fill: {{$button_color}}" rx="0" ry="0" x="0" y="0" width="103" height="26">
                                                    </rect>
                                                </svg>
                                                <div onclick="application.goToTargetView(event)" id="Edit_Prolife" style="color : {{$button_text_color}}">
                                                    <span>Edit Prolife</span>
                                                </div>
                                                <div id="My_Chat" style="color: {{$button_text_color}}">
                                                    <span>My Chat</span>
                                                </div>
                                                <div id="User_Video" style="color:{{ $sub_heading_color }}">
                                                    <span>User Video</span>
                                                </div>
                                                <div id="ID230_Likes" style="color: {{$text_color}}">
                                                    <span>230<br/>Likes</span>
                                                </div>
                                                <div id="ID1210_Followings" style="color: {{$text_color}}">
                                                    <span>1210<br/>Followings</span>
                                                </div>
                                                <div id="ID130_Follower" style="color: {{$text_color}}">
                                                    <span>130<br/>Follower</span>
                                                </div>
                                                <svg class="Line_44" viewBox="0 0 329 2">
                                                    <path id="Line_44" d="M 0 2 L 329 0" style="stroke: {{$divider_color}}">
                                                    </path>
                                                </svg>
                                                <svg class="Line_45" viewBox="0 0 1 43">
                                                    <path id="Line_45" d="M 0 0 L 1 43" style="stroke: {{$divider_color}}">
                                                    </path>
                                                </svg>
                                                <svg class="Line_46" viewBox="0 0 1 43">
                                                    <path id="Line_46" d="M 0 0 L 1 43" style="stroke: {{$divider_color}}">
                                                    </path>
                                                </svg>
                                                <svg class="Rectangle_133" style="border-color:{{ $grid_item_border_color }}">
                                                    <rect id="Rectangle_133" rx="10" ry="10" x="0" y="0" width="106" height="154">
                                                    </rect>
                                                </svg>
                                                <svg class="Rectangle_130" style="border-color: {{ $grid_item_border_color }}">
                                                    <rect id="Rectangle_130" rx="10" ry="10" x="0" y="0" width="106" height="154">
                                                    </rect>
                                                </svg>
                                                <svg class="Rectangle_134" style="border-color: {{ $grid_item_border_color }}">
                                                    <rect id="Rectangle_134" rx="10" ry="10" x="0" y="0" width="106" height="154">
                                                    </rect>
                                                </svg>
                                                <svg class="Rectangle_132" style="border-color: {{ $grid_item_border_color }}">
                                                    <rect id="Rectangle_132" rx="10" ry="10" x="0" y="0" width="106" height="154">
                                                    </rect>
                                                </svg>
                                                <svg class="Rectangle_135" style="border-color: {{ $grid_item_border_color }}">
                                                    <rect id="Rectangle_135" rx="10" ry="10" x="0" y="0" width="106" height="154">
                                                    </rect>
                                                </svg>
                                                <svg class="Rectangle_131" style="border-color: {{ $grid_item_border_color }}">
                                                    <rect id="Rectangle_131" rx="10" ry="10" x="0" y="0" width="106" height="154">
                                                    </rect>
                                                </svg>
                                                <div id="ID123">
                                                    <span>23</span>
                                                </div>
                                                <div id="ID123_b">
                                                    <span>13</span>
                                                </div>
                                                <div id="ID123_ca">
                                                    <span>12</span>
                                                </div>
                                                <div id="ID123_cb">
                                                    <span>13</span>
                                                </div>
                                                <div id="ID123_cc">
                                                    <span>23</span>
                                                </div>
                                                <div id="ID123_cd">
                                                    <span>12</span>
                                                </div>
                                                <div id="ID180">
                                                    <span>50</span>
                                                </div>
                                                <div id="ID180_b">
                                                    <span>40</span>
                                                </div>
                                                <div id="ID180_ca">
                                                    <span>80</span>
                                                </div>
                                                <div id="ID180_cb">
                                                    <span>30</span>
                                                </div>
                                                <div id="ID180_cc">
                                                    <span>90</span>
                                                </div>
                                                <div id="ID180_cd">
                                                    <span>95</span>
                                                </div>
                                            
                                                <!-- <i  id="eye-24-512" class="fa fa-eye" aria-hidden="true" style="color: {{$icon_color}}"></i> -->
                                                <svg id="eye-24-512" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <!-- <i  id="eye-24-512_cc" class="fa fa-eye" aria-hidden="true"></i> -->
                                                 <svg id="eye-24-512_cc" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <!-- <i  id="eye-24-512_cd" class="fa fa-eye" aria-hidden="true" style="color: {{$icon_color}}"></i> -->
                                                <svg id="eye-24-512_cd" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <!-- <i  id="eye-24-512_ce" class="fa fa-eye" aria-hidden="true"></i> -->
                                                <svg id="eye-24-512_ce" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <!-- <i  id="eye-24-512_cf" class="fa fa-eye" aria-hidden="true" style="color: {{$icon_color}}"></i> -->
                                                <svg id="eye-24-512_cf" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <!-- <i  id="eye-24-512_cg" class="fa fa-eye" aria-hidden="true"></i> -->
                                                 <svg id="eye-24-512_cg" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                            
                                                <!-- <i id="like" class="fa fa-heart" aria-hidden="true" style="color: {{$icon_color}}"></i> -->
                                                <svg id="like" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <i id="like_ci" class="fa fa-heart" aria-hidden="true"></i>

                                                <!-- <i id="like_cj" class="fa fa-heart" aria-hidden="true" style="color: {{$icon_color}}"></i> -->
                                                <svg id="like_cj" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>


                                                <i id="like_ck" class="fa fa-heart" aria-hidden="true"></i>

                                                <!-- <i id="like_cl" class="fa fa-heart" aria-hidden="true" style="color: {{$icon_color}}"></i> -->
                                                <svg id="like_cl" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>

                                                <i id="like_cm" class="fa fa-heart" aria-hidden="true"></i>

                                                
                                                <i id="my-video-e" class="fa fa-video-camera" aria-hidden="true" style="color: {{$icon_color}}"></i>
                                                <!-- <svg id="my-video-e" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><g><g><path style="fill : {{ $icon_color }}" d="m416 0h-320c-52.928 0-96 43.072-96 96v405.333c0 4.48 2.816 8.491 7.04 10.027 1.195.427 2.411.64 3.627.64 3.115 0 6.123-1.344 8.192-3.84l103.466-124.16h293.675c52.928 0 96-43.072 96-96v-192c0-52.928-43.072-96-96-96z"/></g></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg> -->

                                            




                                                <div id="Scroll_Group_29">
                                                    <img id="ID4b43b24479ab7f7232909ea05db2" src="{{ asset('appConfig/imgs/ID4b43b24479ab7f7232909ea05db2.png') }}" srcset="{{ asset('appConfig/imgs/ID4b43b24479ab7f7232909ea05db2.png 1x') }}, {{ asset('appConfig/imgs/ID4b43b24479ab7f7232909ea05db2.png') }} 2x">
                                                        
                                                </div>
                                                <div id="Scroll_Group_30">
                                                    <img id="a91628ccbd0a3064393aec0528c9fe" src="{{ asset('appConfig/imgs/a91628ccbd0a3064393aec0528c9fe.png') }}" srcset="{{ asset('appConfig/imgs/a91628ccbd0a3064393aec0528c9fe.png') }} 1x, {{ asset('appConfig/imgs/a91628ccbd0a3064393aec0528c9fe.png') }} 2x">
                                                        
                                                </div>
                                                <div id="Scroll_Group_31">
                                                    <img id="ID44b0aacb15b4f5e1e989be07d0c6" src="{{ asset('appConfig/imgs/ID44b0aacb15b4f5e1e989be07d0c6.png') }}" srcset="{{ asset('appConfig/imgs/ID44b0aacb15b4f5e1e989be07d0c6.png') }} 1x, {{ asset('appConfig/imgs/ID44b0aacb15b4f5e1e989be07d0c6.png') }} 2x">
                                                        
                                                </div>
                                                <div id="Scroll_Group_32">
                                                    <img id="ID1daef9a0dc3f6da8bba9ce142459" src="{{ asset('appConfig/imgs/ID1daef9a0dc3f6da8bba9ce142459.png') }}" srcset="{{ asset('appConfig/imgs/ID1daef9a0dc3f6da8bba9ce142459.png') }} 1x, imgs/ID1daef9a0dc3f6da8bba9ce142459.png 2x">
                                                        
                                                </div>
                                                <img id="p4" src="{{ asset('appConfig/imgs/p4.jpg') }}" srcset="{{ asset('appConfig/imgs/p4.jpg') }} 1x, {{ asset('appConfig/imgs/p4.jpg') }} 2x" style="border-color : {{ $dp_border_color }}">
                                                    
                                                <div id="Scroll_Group_33">
                                                    <img id="ID7001c33a034255824e6bd6605a34" src="{{ asset('appConfig/imgs/ID7001c33a034255824e6bd6605a34.png' ) }}" srcset="{{ asset('appConfig/imgs/ID7001c33a034255824e6bd6605a34.png') }} 1x, {{ asset('appConfig/imgs/ID7001c33a034255824e6bd6605a34.png') }} 2x">
                                                        
                                                </div>
                                                <div id="Scroll_Group_34">
                                                    <img id="Untitled-1" src="{{ asset('appConfig/imgs/Untitled-1.png') }}" srcset="{{ asset('appConfig/imgs/Untitled-1.png') }} 1x, {{ asset('appConfig/imgs/Untitled-1.png') }} 2x">
                                                        
                                                </div>
                                                <div id="annika" style="color: {{ $sub_heading_color }}">
                                                    <span>@annika</span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 chat-main">
                                            <div id="Chat" style="background-color: {{$bg_color}}">
                                                <div id="Group_115">
                                                    <div id="Bars__Status__Default">
                                                        <div id="Action" style="margin-top:-10px;">
                                                            <div id="_Time">
                                                                <span>9:4</span><span>1</span>
                                                            </div>
                                                        </div>
                                                        <div id="Container" style="margin-top:-10px;">
                                                            <div id="Battery">
                                                                <svg class="Rectangle" viewBox="0 0 24.5 11.5">
                                                                    <path id="Rectangle" d="M 3.589200019836426 11.50020027160645 C 2.34089994430542 11.50020027160645 1.889100074768066 11.36970043182373 1.432800054550171 11.12580013275146 C 0.9765000343322754 10.8818998336792 0.6183000206947327 10.52370071411133 0.3744000196456909 10.0673999786377 C 0.129600003361702 9.611100196838379 0 9.158400535583496 0 7.91100025177002 L 0 3.589200019836426 C 0 2.34089994430542 0.129600003361702 1.889100074768066 0.3744000196456909 1.432800054550171 C 0.6183000206947327 0.9765000343322754 0.9765000343322754 0.6183000206947327 1.432800054550171 0.3744000196456909 C 1.889100074768066 0.129600003361702 2.34089994430542 0 3.589200019836426 0 L 18.410400390625 0 C 19.65870094299316 0 20.11140060424805 0.129600003361702 20.56770133972168 0.3744000196456909 C 21.02400016784668 0.6183000206947327 21.38220024108887 0.9765000343322754 21.62610054016113 1.432800054550171 C 21.8700008392334 1.889100074768066 21.99960136413574 2.34089994430542 21.99960136413574 3.589200019836426 L 21.99960136413574 7.91100025177002 C 21.99960136413574 9.158400535583496 21.8700008392334 9.611100196838379 21.62610054016113 10.0673999786377 C 21.38220024108887 10.52370071411133 21.02400016784668 10.8818998336792 20.56770133972168 11.12580013275146 C 20.11140060424805 11.36970043182373 19.65870094299316 11.50020027160645 18.410400390625 11.50020027160645 L 3.589200019836426 11.50020027160645 Z M 23.00040054321289 3.690000057220459 C 23.00040054321289 3.690000057220459 24.49979972839355 4.453200340270996 24.49979972839355 5.689800262451172 C 24.49979972839355 6.926400184631348 23.00040054321289 7.689599990844727 23.00040054321289 7.689599990844727 L 23.00040054321289 3.690000057220459 Z">
                                                                    </path>
                                                                </svg>
                                                                <svg class="Rectangle_">
                                                                    <rect id="Rectangle_" rx="1.600000023841858" ry="1.600000023841858" x="0" y="0" width="18" height="7.667">
                                                                    </rect>
                                                                </svg>
                                                            </div>
                                                            <svg class="Combined_Shape" viewBox="0 0 17.1 10.7">
                                                                <path id="Combined_Shape" d="M 15.30000019073486 10.70009994506836 C 14.63759994506836 10.70009994506836 14.10030078887939 10.16279983520508 14.10030078887939 9.500400543212891 L 14.10030078887939 1.199699997901917 C 14.10030078887939 0.5372999906539917 14.63759994506836 0 15.30000019073486 0 L 15.90030002593994 0 C 16.56270027160645 0 17.10000038146973 0.5372999906539917 17.10000038146973 1.199699997901917 L 17.10000038146973 9.500400543212891 C 17.10000038146973 10.16279983520508 16.56270027160645 10.70009994506836 15.90030002593994 10.70009994506836 L 15.30000019073486 10.70009994506836 Z M 10.60020065307617 10.70009994506836 C 9.93690013885498 10.70009994506836 9.399600028991699 10.16279983520508 9.399600028991699 9.500400543212891 L 9.399600028991699 3.600000143051147 C 9.399600028991699 2.937600135803223 9.93690013885498 2.400300025939941 10.60020065307617 2.400300025939941 L 11.19960021972656 2.400300025939941 C 11.86290073394775 2.400300025939941 12.40019989013672 2.937600135803223 12.40019989013672 3.600000143051147 L 12.40019989013672 9.500400543212891 C 12.40019989013672 10.16279983520508 11.86290073394775 10.70009994506836 11.19960021972656 10.70009994506836 L 10.60020065307617 10.70009994506836 Z M 6.00029993057251 10.70009994506836 C 5.336999893188477 10.70009994506836 4.799700260162354 10.16279983520508 4.799700260162354 9.500400543212891 L 4.799700260162354 5.900400161743164 C 4.799700260162354 5.237100124359131 5.336999893188477 4.69980001449585 6.00029993057251 4.69980001449585 L 6.599699974060059 4.69980001449585 C 7.263000011444092 4.69980001449585 7.800300121307373 5.237100124359131 7.800300121307373 5.900400161743164 L 7.800300121307373 9.500400543212891 C 7.800300121307373 10.16279983520508 7.263000011444092 10.70009994506836 6.599699974060059 10.70009994506836 L 6.00029993057251 10.70009994506836 Z M 1.199699997901917 10.70009994506836 C 0.5372999906539917 10.70009994506836 0 10.16279983520508 0 9.500400543212891 L 0 7.900200366973877 C 0 7.236900329589844 0.5372999906539917 6.699600219726563 1.199699997901917 6.699600219726563 L 1.800000071525574 6.699600219726563 C 2.462399959564209 6.699600219726563 2.99970006942749 7.236900329589844 2.99970006942749 7.900200366973877 L 2.99970006942749 9.500400543212891 C 2.99970006942749 10.16279983520508 2.462399959564209 10.70009994506836 1.800000071525574 10.70009994506836 L 1.199699997901917 10.70009994506836 Z">
                                                                </path>
                                                            </svg>
                                                            <svg class="Wi-Fi" viewBox="0 0 15.4 11.057">
                                                                <path id="Wi-Fi" d="M 7.700400352478027 11.05740451812744 C 7.617140293121338 11.05740451812744 7.53579044342041 11.02328395843506 7.477200031280518 10.96380424499512 L 5.462100028991699 8.931604385375977 C 5.400250434875488 8.870654106140137 5.365800380706787 8.785684585571289 5.367600440979004 8.698504447937012 C 5.36939001083374 8.61208438873291 5.407440185546875 8.529094696044922 5.472000122070313 8.470804214477539 C 6.094020366668701 7.944544315338135 6.885400295257568 7.654734134674072 7.700400352478027 7.654734134674072 C 8.515399932861328 7.654734134674072 9.306790351867676 7.944554328918457 9.928800582885742 8.470804214477539 C 9.993690490722656 8.529394149780273 10.03141021728516 8.612374305725098 10.03229999542236 8.698504447937012 C 10.03410053253174 8.785684585571289 9.999650001525879 8.870644569396973 9.937800407409668 8.931604385375977 L 7.923600196838379 10.96380424499512 C 7.865010261535645 11.02328395843506 7.783660411834717 11.05740451812744 7.700400352478027 11.05740451812744 Z M 11.23712062835693 7.490284442901611 C 11.15659046173096 7.490284442901611 11.08030033111572 7.459754467010498 11.02229976654053 7.404304504394531 C 10.1098804473877 6.578444480895996 8.930130004882813 6.123604297637939 7.700400352478027 6.123604297637939 C 6.471510410308838 6.124504089355469 5.292730331420898 6.579334259033203 4.381200313568115 7.404304504394531 C 4.322770118713379 7.459744453430176 4.246370315551758 7.490284442901611 4.166070461273193 7.490284442901611 C 4.082390308380127 7.490294456481934 4.003770351409912 7.457524299621582 3.944700241088867 7.398004531860352 L 2.780100345611572 6.221704483032227 C 2.719150304794312 6.160754203796387 2.684710264205933 6.076114177703857 2.685600280761719 5.989504337310791 C 2.686490297317505 5.903304100036621 2.722580194473267 5.819324493408203 2.784600257873535 5.759104251861572 C 4.12483024597168 4.512454509735107 5.870980262756348 3.825904369354248 7.701410293579102 3.825904369354248 C 9.531840324401855 3.825904369354248 11.27824020385742 4.51246452331543 12.61890029907227 5.759104251861572 C 12.68093013763428 5.819334506988525 12.71701049804688 5.903304100036621 12.71790027618408 5.989504337310791 C 12.71879005432129 6.076114177703857 12.68435001373291 6.160754203796387 12.62340068817139 6.221704483032227 L 11.45880031585693 7.398004531860352 C 11.39974021911621 7.45751428604126 11.32101058959961 7.490284442901611 11.23712062835693 7.490284442901611 Z M 13.92010021209717 4.782724380493164 C 13.83860015869141 4.782724380493164 13.76164054870605 4.751354217529297 13.70340061187744 4.694394111633301 C 12.0759105682373 3.14829421043396 9.944000244140625 2.296804428100586 7.700400352478027 2.296804428100586 C 5.454940319061279 2.296804428100586 3.323030233383179 3.14829421043396 1.697400212287903 4.694404125213623 C 1.638720273971558 4.751354217529297 1.56147027015686 4.782724380493164 1.479910254478455 4.782724380493164 C 1.39650022983551 4.782724380493164 1.318400263786316 4.750084400177002 1.260000228881836 4.690804481506348 L 0.09360022842884064 3.514504432678223 C 0.03323023021221161 3.453224420547485 -0.0008797682239674032 3.369254350662231 2.317810015028954e-07 3.284104347229004 C 0.0009002317674458027 3.196994304656982 0.03542023152112961 3.115484237670898 0.09720022976398468 3.054604291915894 C 2.152600288391113 1.084964275360107 4.852640151977539 0.0002343157975701615 7.699950218200684 0.0002343157975701615 C 10.54726028442383 0.0002343157975701615 13.24730014801025 1.084964275360107 15.30270004272461 3.054604291915894 C 15.36538028717041 3.116374254226685 15.39990043640137 3.197874307632446 15.39990043640137 3.284104347229004 C 15.40080070495605 3.370834350585938 15.3672399520874 3.452654361724854 15.30539989471436 3.514504432678223 L 14.13990020751953 4.690804481506348 C 14.08150005340576 4.750084400177002 14.00343990325928 4.782724380493164 13.92010021209717 4.782724380493164 Z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <svg class="Rectangle_164">
                                                        <rect id="Rectangle_164" style="fill: {{$accent_color}}" rx="0" ry="0" x="0" y="0" width="375" height="38">
                                                        </rect>
                                                    </svg>
                                                    <div id="Messages" style="color: {{ $heading_color }}">
                                                        <span>@user1005</span>
                                                    </div>
                                                    <div id="Messages_">
                                                        <span>01:30pm</span>
                                                    </div>
                                                    <div id="Messages_ba">
                                                        <span>01:40pm</span>
                                                    </div>
                                                    <div id="Messages_bb">
                                                        <span>01:35pm</span>
                                                    </div>
                                                    <div id="Messages_bc">
                                                        <span>01:45pm</span>
                                                    </div>
                                                    <div id="Icons__Filled__Menu" class="Icons___Filled___Menu">
                                                        <div id="Group_1">
                                                            <svg class="Path" viewBox="0 0 9.351 17.143">
                                                                <path id="Path" d="M 2.821808099746704 8.571428298950195 L 9.008306503295898 2.090334892272949 C 9.464763641357422 1.612141847610474 9.464763641357422 0.8368377685546875 9.008306503295898 0.3586447536945343 C 8.551849365234375 -0.1195482537150383 7.811787128448486 -0.1195482537150383 7.355329513549805 0.3586447536945343 L 0.342342734336853 7.705583572387695 C -0.1141142323613167 8.18377685546875 -0.1141142323613167 8.959080696105957 0.342342734336853 9.437273979187012 L 7.355329513549805 16.78421211242676 C 7.811787128448486 17.26240539550781 8.551849365234375 17.26240539550781 9.008306503295898 16.78421211242676 C 9.464763641357422 16.3060188293457 9.464763641357422 15.5307149887085 9.008306503295898 15.05252170562744 L 2.821808099746704 8.571428298950195 Z">
                                                                </path>
                                                            </svg>
                                                            <img id="Mask_Group_1" src="{{ asset('appConfig/Mask_Group_1.png') }}" srcset="{{ asset('appConfig/imMask_Group_1.png') }} 1x, {{ asset('appConfig/Mask_Group_1@2x.png') }} 2x">
                                                            
                                                                
                                                            </svg>
                                                        </div>
                                                    </div>
                                                    <svg class="Rectangle_165">
                                                        <rect id="Rectangle_165" style="fill: {{$sender_msg_color}}" rx="7" ry="7" x="0" y="0" width="211" height="93">
                                                        </rect>
                                                    </svg>
                                                    <svg class="Rectangle_169">
                                                        <rect id="Rectangle_169" style="fill: {{$sender_msg_color}}" rx="7" ry="7" x="0" y="0" width="211" height="93">
                                                        </rect>
                                                    </svg>
                                                    <svg class="Rectangle_167_bk">
                                                        <!-- <linearGradient id="Rectangle_167_bk-1" spreadMethod="pad" x1="0.375" x2="0.5" y1="0" y2="1">
                                                            <stop offset="0" stop-color="#7f4fbb" stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#df4a6c" stop-opacity="1"></stop>
                                                        </linearGradient> -->
                                                        <rect id="Rectangle_167_bk" style="fill: {{ $my_msg_color }}" rx="7" ry="7" x="0" y="0" width="232" height="93">
                                                        </rect>
                                                    </svg>
                                                    <svg class="Rectangle_168_bm">
                                                        <linearGradient id="Rectangle_168_bm" spreadMethod="pad" x1="0.375" x2="0.5" y1="0" y2="1">
                                                            <stop offset="0" stop-color="#7f4fbb" stop-opacity="1"></stop>
                                                            <stop offset="1" stop-color="#df4a6c" stop-opacity="1"></stop>
                                                        </linearGradient>
                                                        <rect id="Rectangle_168_bm" rx="7" ry="7" x="0" y="0" width="232" height="93">
                                                        </rect>
                                                    </svg>
                                                    <div id="Messages_bn" style="color: {{ $sender_msg_text_color }}">
                                                        <span>Lorem ipsum dolor sit amet, <br/>consectetur adipscing elit sed do<br/> elusmod tempor</span>
                                                    </div>
                                                    <div id="Messages_bo" style="color: {{$sender_msg_text_color}}">
                                                        <span>Lorem ipsum dolor sit amet, <br/>consectetur adipscing elit sed do<br/> elusmod tempor</span>
                                                    </div>
                                                    <div id="Messages_bp" style="color: {{$my_msg_text_color}}">
                                                        <span>Lorem ipsum dolor sit amet, <br/>consectetur adipscing elit sed do<br/> elusmod tempor</span>
                                                    </div>
                                                    <div id="Messages_bq" style="color: {{$my_msg_text_color}}">
                                                        <span>Lorem ipsum dolor sit amet, <br/>consectetur adipscing elit sed do<br/> elusmod tempor</span>
                                                    </div>
                                                    <div id="noun_Check_Mark_65586">
                                                        <svg class="Path_262" viewBox="7.3 10.1 10.538 8.215">
                                                            <path id="Path_262" d="M 16.6766414642334 10.09999847412109 L 10.82661247253418 15.94974803924561 L 8.461709976196289 13.62644290924072 L 7.300000667572021 14.78809642791748 L 10.82661247253418 18.31454086303711 L 11.98831939697266 17.15288925170898 L 17.83835029602051 11.26165199279785 L 16.6766414642334 10.09999847412109 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div id="noun_Check_Mark_65586_bt">
                                                        <svg class="Path_262_bu" viewBox="7.3 10.1 10.538 8.215">
                                                            <path id="Path_262_bu" d="M 16.6766414642334 10.09999847412109 L 10.82661247253418 15.94974803924561 L 8.461709976196289 13.62644290924072 L 7.300000667572021 14.78809642791748 L 10.82661247253418 18.31454086303711 L 11.98831939697266 17.15288925170898 L 17.83835029602051 11.26165199279785 L 16.6766414642334 10.09999847412109 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div id="noun_Check_Mark_65586_bv">
                                                        <svg class="Path_262_bw" viewBox="7.3 10.1 10.538 8.215">
                                                            <path id="Path_262_bw" d="M 16.6766414642334 10.09999847412109 L 10.82661247253418 15.94974803924561 L 8.461709976196289 13.62644290924072 L 7.300000667572021 14.78809642791748 L 10.82661247253418 18.31454086303711 L 11.98831939697266 17.15288925170898 L 17.83835029602051 11.26165199279785 L 16.6766414642334 10.09999847412109 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                    <div id="noun_Check_Mark_65586_bx">
                                                        <svg class="Path_262_by" viewBox="7.3 10.1 10.538 8.215">
                                                            <path id="Path_262_by" d="M 16.6766414642334 10.09999847412109 L 10.82661247253418 15.94974803924561 L 8.461709976196289 13.62644290924072 L 7.300000667572021 14.78809642791748 L 10.82661247253418 18.31454086303711 L 11.98831939697266 17.15288925170898 L 17.83835029602051 11.26165199279785 L 16.6766414642334 10.09999847412109 Z">
                                                            </path>
                                                        </svg>
                                                    </div>
                                                </div>
                                                <div class="msg-send" style="background-color: {{$accent_color}}">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-lg-10">typing...</div>
                                                            <div class="col-lg-2"><i class="fa fa-paper-plane" aria-hidden="true"></i></div>
                                                        </div>
                                                    </div>
                                        
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-4">
                               
                                    <div class="row">
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Background</label>
                                           
                                            <div class="col-md-7">
                                                <input type="text" id="bg_color" name="bg_color" class="form-control demo" value="<?php echo $bg_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Accent</label>
                                            
                                            <div class="col-md-7">
                                                <input type="text" id="accent_color" name="accent_color" class="form-control demo" value="<?php echo $accent_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Sender Message</label>
                                            <div class="col-md-7">
                                                <input type="text" id="sender_msg_color" name="sender_msg_color" class="form-control demo" value="<?php echo $sender_msg_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Sender Message Text</label>
                                            <div class="col-md-7">
                                                <input type="text" id="sender_msg_text_color" name="sender_msg_text_color" class="form-control demo" value="<?php echo $sender_msg_text_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">My Message</label>
                                            <div class="col-md-7">
                                                <input type="text" id="my_msg_color" name="my_msg_color" class="form-control demo" value="<?php echo $my_msg_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">My Message Text</label>
                                            <div class="col-md-7">
                                                <input type="text" id="my_msg_text_color" name="my_msg_text_color" class="form-control demo" value="<?php echo $my_msg_text_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Button</label>
                                            <div class="col-md-7">
                                                <input type="text" id="button_color" name="button_color" class="form-control demo" value="<?php echo $button_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Button Text</label>
                                            <div class="col-md-7">
                                                <input type="text" id="button_text_color" name="button_text_color" class="form-control demo" value="<?php echo $button_text_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                                                       
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Heading</label>
                                            <div class="col-md-7">
                                                <input type="text" id="heading_color" name="heading_color" class="form-control demo" value="<?php echo $heading_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Sub Heading</label>
                                            <div class="col-md-7">
                                                <input type="text" id="sub_heading_color" name="sub_heading_color" class="form-control demo" value="<?php echo $sub_heading_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="col-md-12">
                               
                                <div class="row">
                                    
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Icon</label>
                                            <div class="col-md-7">
                                                <input type="text" id="icon_color" name="icon_color" class="form-control demo" value="<?php echo $icon_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#bcaaa4|#eeeeee|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Dashboard Icon</label>
                                            <div class="col-md-7">
                                                <input type="text" id="dashboard_icon_color" name="dashboard_icon_color" class="form-control demo" value="<?php echo $dashboard_icon_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-sm-3">
                                        <div style="padding-top:25px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Dashboard Icon Background</label>
                                            <div class="col-md-7">
                                                <input type="text" id="dashboard_icon_background_color" name="dashboard_icon_background_color" class="form-control demo" value="<?php echo $dashboard_icon_background_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div> -->
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Grid Item Border</label>
                                            <div class="col-md-7">
                                                <input type="text" id="grid_item_border_color" name="grid_item_border_color" class="form-control demo" value="<?php echo $grid_item_border_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Grid Border Radius</label>
                                            <div class="col-md-7">
                                                <input type="text" id="grid_border_radius" name="grid_border_radius" class="form-control" value="<?php echo $grid_border_radius; ?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Divider</label>
                                            <div class="col-md-7">
                                                <input type="text" id="divider_color" name="divider_color" class="form-control demo" value="<?php echo $divider_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">DP Border</label>
                                            <div class="col-md-7">
                                                <input type="text" id="dp_border_color" name="dp_border_color" class="form-control demo" value="<?php echo $dp_border_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <div style="padding-top:10px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Text</label>
                                            <div class="col-md-7">
                                                <input type="text" id="text_color" name="text_color" class="form-control demo" value="<?php echo $text_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div style="padding-top:20px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Inactive Button Color</label>
                                            <div class="col-md-7">
                                                <input type="text" id="inactive_button_color" name="inactive_button_color" class="form-control demo" value="<?php echo $inactive_button_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div style="padding-top:20px"></div>
                                        <div class="form-group row label-floating is-empty" style="padding: 0px;margin: 0px;">
                                            <label class="control-label title col-md-5">Inactive Button Text Color</label>
                                            <div class="col-md-7">
                                                <input type="text" id="inactive_button_text_color" name="inactive_button_text_color" class="form-control demo" value="<?php echo $inactive_button_text_color; ?>" data-swatches="#ef9a9a|#90caf9|#a5d6a7|#fff59d|#ffcc80|#000000|#ffffff|#f44336|#2196f3|#4caf50|#ffeb3b|#ff9800|#795548|#9e9e9e">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row margin-tp-bt-10">
                                    <div class="col-lg-12 col-md-12" >   
                                    <input type="hidden" name="id" value="<?php echo (isset($id)) ? $id : 0; ?>">                                     
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>    
                            </div> 
                       
                            </div>       
                            </form>
                                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </div>
</div>
</div>
</section>
<script src="{{ asset('js/jquery.minicolors.js')}}"></script>
<script>
    $(document).ready( function() {
        $("#grid_border_radius").keyup(function(){
            $(".Rectangle_133").css("border-radius", $(this).val()+'px');
            $('.Rectangle_130').css("border-radius", $(this).val()+'px');
            $('.Rectangle_134').css("border-radius", $(this).val()+'px');
            $('.Rectangle_132').css("border-radius", $(this).val()+'px');
            $('.Rectangle_135').css("border-radius", $(this).val()+'px');
            $('.Rectangle_131').css("border-radius", $(this).val()+'px');
        });
        
        $('.demo').minicolors({
            theme: 'bootstrap',
          control: $('.demo').attr('data-control') || 'hue',
        //   defaultValue: $('.demo').attr('data-defaultValue') || '',
          format: $('.demo').attr('data-format') || 'hex',
        //   keywords: $('.demo').attr('data-keywords') || '',
          inline: $('.demo').attr('data-inline') === 'true',
        //   letterCase: $('.demo').attr('data-letterCase') || 'lowercase',
        //   opacity: $('.demo').attr('data-opacity'),
          position: $('.demo').attr('data-position') || 'bottom left',
          swatches: $('.demo').attr('data-swatches') ? $('.demo').attr('data-swatches').split('|') : [],
          change: function(hex, opacity) {
            var id = $(this).attr('id');
            
            var log;
            try {
              log = hex ? hex : 'transparent';
              if(id=='bg_color'){
                $('#bg').css({'fill':log});
                $('#Chat').css({'background-color':log});
              }
              if(id=='accent_color'){
                $('#Rectangle_164').css({'fill':log});
                $('.msg-send').css({'background-color':log});
              }
              if(id=='button_color'){
                $('#Rectangle_136').css({'fill':log});
                $('#Rectangle_171').css({'fill':log});
                $('.follow-btn').css({'background':log});
              }
              if(id=='button_text_color'){
                $('#Edit_Prolife').css({'color':log});
                $('#My_Chat').css({'color':log});
                $('.follow-btn').css({'color':log});
              }
              if(id=='sender_msg_color'){
                $('#Rectangle_165').css({'fill':log});
                $('#Rectangle_169').css({'fill':log});
              }
              if(id=='sender_msg_text_color'){
                $('#Messages_bn').css({'color':log});
                $('#Messages_bo').css({'color':log});
              }
              if(id=='my_msg_color'){
                $('#Rectangle_167_bk').css({'fill':log});
                // $('#Rectangle_168_bm').css({'fill':log});
              }
              if(id=='my_msg_text_color'){
                $('#Messages_bp').css({'color':log});
                $('#Messages_bq').css({'color':log});
              }
              if(id=='heading_color'){
                $('#Annika').css({'color':log});
                $('#Messages').css({'color':log});
              }
              if(id=='sub_heading_color'){
                $('#annika').css({'color':log});
                $('#User_Video').css({'color':log});
              }
              if(id=='icon_color'){
                  $('#right_arrow-512').css({'color': log});
                  $('#like path').css({'fill': log});
                  $('#like_cl path').css({'fill':log});
                  $('#like_cj path').css({'fill':log});
                  $('#eye-24-512 path').css({'fill':log});
                  $('#eye-24-512_cf path').css({'fill':log});
                  $('#eye-24-512_cd path').css({'fill':log});
                  $('#my-video-e').css({'color':log});
                  $('#more-vertical-menu-dots-512').css({'color':log});
              }
              if(id=='dashboard_icon_color'){
                $('.like path').css({'fill': log});
                $('#Path_281 path').css({'fill': log});
                $('#home path').css({'fill': log});
                $('#hash-tag path').css({'fill':log});
                $('#play g').css({'fill':log});
                $('#message-icon path').css({'fill':log});
                $('#me-icon path').css({'fill':log});
                $('#plus-icon i').css({'background-color':log});
                $('#ID11_Share').css({'fill': log});
              }
              if(id=='dashboard_icon_background_color'){
                // $('#play').css({'background': log});
                $('#plus-icon i').css({'color': log});
              }
              if(id=='grid_item_border_color'){
                $('.Rectangle_133').css({'border-color': log});
                $('.Rectangle_135').css({'border-color': log});
                $('.Rectangle_132').css({'border-color': log});
                $('.Rectangle_134').css({'border-color': log});
                $('.Rectangle_130').css({'border-color': log});
                $('.Rectangle_131').css({'border-color': log});
              }
              if(id=='divider_color'){
                $('#Line_44').css({'stroke': log});
                $('#Line_45').css({'stroke': log});
                $('#Line_46').css({'stroke': log});
              }

              if(id=='dp_border_color'){
                $('#p4').css({ 'border-color' : log });
                $('#p2').css({ 'border-color' : log });
              }
              if(id=='text_color'){
                  $('#ID230_Likes').css({'color': log});
                  $('#ID1210_Followings').css({'color':log});
                  $('#ID130_Follower').css({'color':log});
                  $('#ID125k').css({'color':log});
                  $('#ID38k').css({'color':log});
                  $('#ID125k_bn').css({'color':log});
                  $('#Willie_Singleton').css({'color':log});
                  $('#My_talent_my_dance').css({'color':log});
                  $('#Featured').css({'color':log});
                  $('#ID180_cb').css({'color':log});
                  $('#ID180').css({'color':log});
                  $('#ID123_cc').css({'color':log});
                  $('#ID180_cc').css({'color':log});
                  $('#ID123_ca').css({'color':log});
                  $('#ID180_ca').css({'color':log});

              }
              console.log('testttt '+log);
              if( opacity ) log += ', ' + opacity;
              console.log('testttt3333 '+log);
            } catch(e) {}
          },
          theme: 'default',
          
        });

      });

    //});
  </script>  
@endsection