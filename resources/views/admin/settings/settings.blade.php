@extends('admin.master')
@section('title', '')
@section('style')
    <link href={{asset('/admin/css/pages/tab-page.css')}} rel="stylesheet">
@stop
@section('content')
    {{--<div class="row">--}}
    {{--<div class="col-12">--}}
    {{--<div class="card">--}}
    {{--<div class="card-body p-b-0">--}}
    {{--<h4 class="card-title">Customtab Tab</h4>--}}
    {{--<h6 class="card-subtitle">Use default tab with class <code>customtab</code></h6></div>--}}
    {{--<!-- Nav tabs -->--}}
    {{--<ul class="nav nav-tabs customtab" role="tablist">--}}
    {{--<li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#home2" role="tab"--}}
    {{--aria-expanded="true"><span class="hidden-sm-up"><i--}}
    {{--class="ti-home"></i></span>--}}
    {{--<span class="hidden-xs-down">Home</span></a></li>--}}
    {{--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile2" role="tab"--}}
    {{--aria-expanded="false"><span class="hidden-sm-up"><i--}}
    {{--class="ti-user"></i></span>--}}
    {{--<span class="hidden-xs-down">Profile</span></a></li>--}}
    {{--<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#messages2" role="tab"--}}
    {{--aria-expanded="false"><span class="hidden-sm-up"><i--}}
    {{--class="ti-email"></i></span> <span--}}
    {{--class="hidden-xs-down">Messages</span></a></li>--}}
    {{--</ul>--}}
    {{--<!-- Tab panes -->--}}
    {{--<div class="tab-content">--}}
    {{--<div class="tab-pane active" id="home2" role="tabpanel" aria-expanded="true">--}}
    {{--<div class="p-20">--}}
    {{--<h3>Best Clean Tab ever</h3>--}}
    {{--<h4>you can use it with the small code</h4>--}}
    {{--<p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo,--}}
    {{--rhoncus ut, imperdiet a.</p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="tab-pane p-20" id="profile2" role="tabpanel" aria-expanded="false">2</div>--}}
    {{--<div class="tab-pane p-20" id="messages2" role="tabpanel" aria-expanded="false">3</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    <main class="main-content bgc-grey-100">
        <div id="mainContent">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4>Settings</h4>
                                <h6>Manage your application public and admin
                                    component.</h6>
                                <br>


                                <!----------------------------- Tab Nav tabs -------------------------------------------------->
                                <div class=" customvtab">
                                    <ul class="nav nav-tabs " role="tablist">
                                        <li class="nav-item"><a class="nav-link active" data-toggle="tab"
                                                                href="#general" role="tab"
                                                                aria-expanded="false"><span class="hidden-sm-up"><i
                                                            class="ti-home"></i></span> <span class="hidden-xs-down"><b>General</b></span>
                                            </a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#seo"
                                                                role="tab" aria-expanded="true"><span
                                                        class="hidden-sm-up"><i
                                                            class="ti-tag"></i></span> <span
                                                        class="hidden-xs-down"><b> SEO</b></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#language"
                                                                role="tab" aria-expanded="true"><span
                                                        class="hidden-sm-up"><i
                                                            class="ti-flag"></i></span> <span class="hidden-xs-down"><b> Language</b></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mail"
                                                                role="tab" aria-expanded="true"><span
                                                        class="hidden-sm-up"><i
                                                            class="ti-email"></i></span> <span
                                                        class="hidden-xs-down"><b> Mail</b></span></a>
                                        </li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social_media"
                                                                role="tab" aria-expanded="true"><span
                                                        class="hidden-sm-up"><i
                                                            class="ti-user"></i></span> <span
                                                        class="hidden-xs-down"><b> Social</b></span></a>
                                        </li>

                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#others"
                                                                role="tab"
                                                                aria-expanded="false"><span class="hidden-sm-up"><i
                                                            class="ti-info-alt"></i></span><span
                                                        class="hidden-xs-down"> Others</span></a></li>
                                    </ul>


                                    <!---------------------------------------- Tab panes contents-------------------------- -->
                                    <form method="POST" action="{{url('/admin/settings/save')}}">{{ csrf_field() }}
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="general" role="tabpanel"
                                                 aria-expanded="false">
                                                <div class="p-20">
                                                    <h3>General Settings</h3>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.
                                                        In enim
                                                        justo, rhoncus ut, imperdiet a.</p>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Site URL</label><input name="site_url"
                                                                                           type="text"
                                                                                           class="form-control"
                                                                                           value="@if(isset($settings[0])){{$settings[0]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Site Title</label><input name="site_title"
                                                                                             type="text"
                                                                                             class="form-control"
                                                                                             value="@if(isset($settings[1])){{$settings[1]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Site Description</label><input
                                                                        name="site_description"
                                                                        type="text" class="form-control"
                                                                        value="@if(isset($settings[2])){{$settings[2]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Google Analytics Code</label><textarea
                                                                        name="google_analytics_code"
                                                                        type="text"
                                                                        class="form-control">@if(isset($settings[3])) {{$settings[3]->details}}@endif</textarea>
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Mailchimp Signup Form</label><textarea
                                                                        name="mailchimp_signup_form"
                                                                        type="text"
                                                                        class="form-control">@if(isset($settings[4])) {{$settings[4]->details}}@endif</textarea>
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Logo</label><input name="logo"
                                                                                       type="file" class="form-control">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Favicon</label><input name="favicon"
                                                                                          type="file"
                                                                                          class="form-control"></div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Timezone</label><select name="timezone"
                                                                                            type="text"
                                                                                            class="form-control">
                                                                    <?php $timezones = \App\Model\Timezone::all(); ?>

                                                                    @foreach($timezones as $timezone)
                                                                        <option value="{{$timezone->id}}">{{$timezone->code}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Site Active? (Maintenance Mode)</label><select
                                                                        type="text" class="form-control">
                                                                    <option value="1">yes</option>
                                                                    <option value="2">No</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Maintenance Mode Message</label><input
                                                                        name="maintenance_mode_message"
                                                                        type="text" class="form-control"
                                                                        value="@if(isset($settings[8])) {{$settings[8]->details}}@endif">
                                                            </div>


                                                            <h3>Others</h3>
                                                            <hr>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Header</label><input name="header"
                                                                                         type="text"
                                                                                         class="form-control"
                                                                                         value="@if(isset($settings[9])) {{$settings[9]->details}}@endif"></input>
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    Footer</label><input name="fotter"
                                                                                         type="text"
                                                                                         class="form-control"
                                                                                         value="@if(isset($settings[10])) {{$settings[10]->details}}@endif"></input>
                                                            </div>


                                                            <h3>Google Captcha</h3>
                                                            <hr>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    App ID</label><input name="app_id"
                                                                                         type="text"
                                                                                         class="form-control"
                                                                                         value="@if(isset($settings[11])) {{$settings[11]->details}}@endif"></input>
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">
                                                                    App Secret Key</label><input name="app_secret_key"
                                                                                                 type="text"
                                                                                                 class="form-control"
                                                                                                 value="@if(isset($settings[12])) {{$settings[12]->details}}@endif"></input>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="seo" role="tabpanel" aria-expanded="false">
                                                <div class="p-20">
                                                    <h3>SEO Settings</h3>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.
                                                        In enim
                                                        justo, rhoncus ut, imperdiet a.</p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">SEO
                                                                    Keywords</label><input name="seo_keywords"
                                                                                           type="text"
                                                                                           class="form-control"
                                                                                           value="@if(isset($settings[13])) {{$settings[13]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">SEO
                                                                    Description</label><input name="seo_description"
                                                                                              type="text"
                                                                                              class="form-control"
                                                                                              value="@if(isset($settings[14])) {{$settings[14]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">Google
                                                                    Webmaster
                                                                    Domain Verify Code</label><input
                                                                        name="google_webmaster_domain_verify_code"
                                                                        type="text" class="form-control"
                                                                        value="@if(isset($settings[15])) {{$settings[15]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""
                                                                                           class="label-control">Bing
                                                                    Webmaster
                                                                    Domain Verify Code</label><input
                                                                        name="bing_webmaster_domain_verify_code"
                                                                        type="text" class="form-control"
                                                                        value="@if(isset($settings[16])) {{$settings[16]->details}}@endif">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="language" role="tabpanel" aria-expanded="false">
                                                <div class="p-20">
                                                    <div class="row ">
                                                        <div class="col-md-5 ">
                                                            <h3>Add Language</h3>
                                                        </div>
                                                        <div class="col-md-7 text-right">
                                                            <button type="button" data-target="#add_and_edit_modal"
                                                                    data-toggle="modal" data-id="add"
                                                                    class="add_btn btn btn-info">
                                                                <i class="fa fa-plus-circle"></i> Create New
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.
                                                        In enim
                                                        justo, rhoncus ut, imperdiet a.</p>
                                                    <table class="table table-bordered table-striped">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Name</th>
                                                            <th>Short Name</th>
                                                            <th>Status</th>
                                                            <th style="width: 100px; text-align: center;">Action</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        @if(!empty($langs[0])) @foreach($langs as $index => $lang)
                                                            <tr class="bg-light">
                                                                <td>{{$index+1}}</td>
                                                                <td>{{$lang->language_name}}</td>
                                                                <td>{{$lang->language_short_name}}</td>
                                                                <td>
                                                                    @if(\App\Http\Enum\AllEnum::NEWS_STATUS_PENDING==$lang->status)
                                                                        Pending
                                                                    @elseif(\App\Http\Enum\AllEnum::STATUS_ACTIVE==$lang->status)
                                                                        Active
                                                                    @elseif(\App\Http\Enum\AllEnum::STATUS_INACTIVE==$lang->status)
                                                                        Inactive
                                                                    @endif</td>
                                                                <td style="width: 100px; text-align: center;">
                                                                    <a href="#add_and_edit_modal" data-toggle="modal"
                                                                       data-id="{{Crypt::encrypt($lang->id)}}"
                                                                       class="edit_btn"
                                                                       data-original-title="Close">
                                                                        <i class="fa fa-edit text-info">&nbsp;&nbsp;</i>
                                                                    </a>
                                                                    <a data-toggle="modal"
                                                                       href="#delete_modal_{{$lang->id}}"
                                                                       data-original-title="Delete">&nbsp;&nbsp;
                                                                        <i class="fa fa-trash-o text-danger"></i>
                                                                    </a>
                                                                    <div id="delete_modal_{{$lang->id}}"
                                                                         class="modal fade in">
                                                                        <div class="modal-dialog modal-confirm">
                                                                            <div class="modal-content">
                                                                                <div class="modal-header">
                                                                                    <h4 class="modal-title">
                                                                                        Confirmation</h4>
                                                                                    <button type="button" class="close"
                                                                                            data-dismiss="modal"
                                                                                            aria-hidden="true">×
                                                                                    </button>
                                                                                </div>
                                                                                <div class="modal-body">
                                                                                    <p>Are you sure you want to delete
                                                                                        this item? This action
                                                                                        cannot be
                                                                                        undone and you will be unable to
                                                                                        recover any data.</p>
                                                                                </div>
                                                                                <div class="modal-footer">
                                                                                    <a href="#" class="btn btn-info"
                                                                                       data-dismiss="modal">Cancel</a>
                                                                                    <a href="{{URL::to('/admin/language/delete/'.$lang->id)}}"
                                                                                       class="btn btn-danger">Yes,
                                                                                        delete it!</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        @endforeach @endif
                                                        </tbody>
                                                    </table>

                                                    <hr>
                                                    <h3>Language Settings</h3>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.In enim justo, rhoncus ut, imperdiet a.</p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form">
                                                                <div class="form-group"><label for="">Primary
                                                                        Language</label><select name="primary_language"
                                                                                                class="form-control">
                                                                        <?php $languages = \App\Model\Language::where('status', \App\Http\Enum\AllEnum::STATUS_ACTIVE)->get(); ?>
                                                                        @if(isset($languages[0]))
                                                                            @foreach($languages as $language)
                                                                                <option value="{{$language->id}}">{{$language->language_name}}
                                                                                    ({{$language->language_short_name}})
                                                                                </option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                                <div class="form-group"><label for="">Secondary
                                                                        Language</label><select
                                                                            name="secondary_language"
                                                                            class="form-control">
                                                                        @if(isset($languages[0]))
                                                                            @foreach($languages as $language)
                                                                                <option value="{{$language->id}}">{{$language->language_name}}
                                                                                    ({{$language->language_short_name}})
                                                                                </option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="mail" role="tabpanel" aria-expanded="false">
                                                <div class="p-20">
                                                    <h3>Mail Settings</h3>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.
                                                        In enim
                                                        justo, rhoncus ut, imperdiet a.</p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="">Mail Driver</label>
                                                                <input name="mail_driver" type="text"
                                                                       class="form-control" placeholder=""
                                                                       value="@if(isset($settings[19])) {{$settings[19]->details}}@endif">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Mail Host</label>
                                                                <input name="mail_host" type="text" class="form-control"
                                                                       placeholder=""
                                                                       value="@if(isset($settings[20])) {{$settings[20]->details}}@endif">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Mail Port</label>
                                                                <input name="mail_port" type="text" class="form-control"
                                                                       placeholder=""
                                                                       value="@if(isset($settings[21])) {{$settings[21]->details}}@endif">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Mail Username</label>
                                                                <input name="mail_username" type="text"
                                                                       class="form-control" placeholder=""
                                                                       value="@if(isset($settings[22])) {{$settings[22]->details}}@endif">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="">Mail Password</label>
                                                                <input name="mail_password" type="text"
                                                                       class="form-control" placeholder=""
                                                                       value="@if(isset($settings[22])) {{$settings[22]->details}}@endif">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="" class="control-label">Mail
                                                                    Encryption</label>
                                                                <input name="mail_encryption" type="text"
                                                                       class="form-control" placeholder=""
                                                                       value="@if(isset($settings[24])) {{$settings[24]->details}}@endif">
                                                            </div>
                                                            <div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="social_media" role="tabpanel"
                                                 aria-expanded="false">
                                                <div class="p-20">
                                                    <h3>Social Media Settings</h3>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.
                                                        In enim
                                                        justo, rhoncus ut, imperdiet a.</p>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group"><label
                                                                        for=""><i class="btn btn-facebook">f</i>
                                                                    Facebook Page URL</label><input
                                                                        name="facebook_page_url"
                                                                        type="text"
                                                                        class="form-control"
                                                                        value="@if(isset($settings[25])) {{$settings[25]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label
                                                                        for=""><i class="btn btn-twitter">t</i>
                                                                    Twitter URL</label><input name="twitter_url"
                                                                                              type="text"
                                                                                              class="form-control"
                                                                                              value="@if(isset($settings[26])) {{$settings[26]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""><i
                                                                            class="btn btn-googleplus">g+</i> Google
                                                                    Page URL</label><input name="google_page_url"
                                                                                           type="text"
                                                                                           class="form-control"
                                                                                           value="@if(isset($settings[27])) {{$settings[27]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for=""><i
                                                                            class="btn btn-instagram">ins</i>
                                                                    Instagram
                                                                    URL</label><input name="instagram_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[28])) {{$settings[28]->details}}@endif">
                                                            </div>

                                                            </br>
                                                            </br>
                                                            <h3><i class="btn btn-facebook">f</i>Facebook</h3>
                                                            <hr>
                                                            <div class="form-group"><label for="">App ID
                                                                    URL</label><input name="fb_app_id_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[29])) {{$settings[29]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for="">App Secret
                                                                    URL</label><input name="fb_app_secret_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[30])) {{$settings[30]->details}}@endif">
                                                            </div>

                                                            <h3><i class="btn btn-twitter">t</i> Twitter</h3>
                                                            <hr>
                                                            <div class="form-group"><label for="">App ID
                                                                    URL</label><input name="tw_app_id_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[31])) {{$settings[31]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for="">App Secret
                                                                    URL</label><input name="tw_app_secret_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[32])) {{$settings[32]->details}}@endif ">
                                                            </div>

                                                            <h3><i class="btn btn-googleplus">g+</i> Google</h3>
                                                            <hr>
                                                            <div class="form-group"><label for="">App ID
                                                                    URL</label><input name="go_app_id_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[33])) {{$settings[33]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for="">App Secret
                                                                    URL</label><input
                                                                        type="text" name="go_app_secret_url"
                                                                        class="form-control"
                                                                        value="@if(isset($settings[34])) {{$settings[34]->details}}@endif">
                                                            </div>

                                                            <h3><i class="btn btn-instagram">ins</i> Instagram</h3>
                                                            <hr>
                                                            <div class="form-group"><label for="">App ID
                                                                    URL</label><input name="ins_app_id_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[35])) {{$settings[35]->details}}@endif">
                                                            </div>
                                                            <div class="form-group"><label for="">App Secret
                                                                    URL</label><input name="ins_app_secret_url"
                                                                                      type="text"
                                                                                      class="form-control"
                                                                                      value="@if(isset($settings[36])) {{$settings[36]->details}}@endif">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="tab-pane" id="others" role="tabpanel" aria-expanded="false">
                                                <div class="p-20">
                                                    <h3>Others Settings</h3>
                                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                                                        arcu.
                                                        In enim
                                                        justo, rhoncus ut, imperdiet a.</p>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <h3>Email Template</h3>
                                                            <hr>
                                                            <div class="form-group"><label
                                                                        for="">Email template
                                                                    design</label><textarea
                                                                        name="email_template_design"
                                                                        type="text"
                                                                        class="form-control"
                                                                        rows="10">@if(isset($settings[37])) {{$settings[37]->details}}@endif</textarea>
                                                            </div>

                                                            <br>

                                                            <h3>Site Optimization </h3>
                                                            <hr>
                                                            <input type="checkbox" name="genarate_sitemap"
                                                                   value=""> Genarate Sitemap<br>
                                                            <input type="checkbox" name="database_optimization"
                                                                   value=""> Database optimization<br>
                                                            <input type="checkbox" name="create_cache" value=""> Create
                                                            Cache<br>
                                                            <input type="checkbox" name="clear_cache" value=""> Clear
                                                            Cache<br>
                                                            <input type="checkbox" name="remove_old_data" value="">
                                                            Remove old/bulk data<br>

                                                            <br>

                                                            <h3>Backup Settings</h3>
                                                            <hr>
                                                            <input type="checkbox" name="database_backup" value="">
                                                            Database Backup<br>
                                                            <input type="checkbox" name="media_backup" value=""> Media
                                                            Backup<br>
                                                            <input type="checkbox" name="hole_site_backup" value="">
                                                            Hole Site Backup<br>

                                                            <br>

                                                            <h3>Cron Job Settings</h3>
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <button type="submit" class="btn btn-primary">Save
                                            Settings
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    {{--Add Language Modal--}}
    <div class="modal fade" id="add_and_edit_modal" data-backdrop="static" tabindex="-1" role="dialog"
         aria-labelledby="myModalLabel">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Modal title</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="text-center" id="loading">
                    <div class="rect1"></div>
                    <div class="rect2"></div>
                    <div class="rect3"></div>
                </div>
                <form action="{{url('/admin/language/add')}}" method="POST" id="form_modal"
                      enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body" id="form_modal_body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label class="required">Name</label>
                                    <input type="text" name="lang_name" maxlength="64" class="form-control" value=""
                                           id="lang_name"
                                           autofocus required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="required">Short name</label>
                                    <input type="text" name="lang_short_name" maxlength="4" class="form-control"
                                           value="" id="lang_short_name"
                                           autofocus required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="required">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option value="">Select</option>
                                        <option value="{{\App\Http\Enum\AllEnum::STATUS_ACTIVE}}">Active</option>
                                        <option value="{{\App\Http\Enum\AllEnum::STATUS_INACTIVE}}">Inactive</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                        <input type="hidden" name="id" id="id">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@section('script')
    @if(!empty(Session::get('message')))
        <script>
            toastr.success('{{Session::get('message')}}');
        </script>
    @endif
    <script>
        $(document.body).on('click', '.add_btn', function (e) {
            $('.modal-title').html('Add Language');
            $('#form_modal_body').find('input').val('');
            $('#form_modal_body').find('select').val('');
        });

        $(document.body).on('click', '.edit_btn', function (e) {
            var edit_id = $(this).data('id');

            $('#loading').show();
            $('.modal-title').html('Edit Language');
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: $('#form_modal').attr('action') + '?edit_id=' + edit_id,
                data: $('#form_modal').serialize(),
                dataType: 'json',
                success: function (data) {
                    $('#loading').hide();

                    $('#lang_name').val(data.lang['language_name']);
                    $('#lang_short_name').val(data.lang['language_short_name']);
                    $('#status').val(data.lang['status']);
                    $('#id').val(data.lang['id']);
                }
            });
        });

    </script>
@stop
