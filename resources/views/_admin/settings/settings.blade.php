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


    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Settings</h4>
                    <h6 class="card-subtitle">Manage your application public and admin component.</code></h6>

                    <!----------------------------- Tab Nav tabs -------------------------------------------------->
                    <div class=" customvtab">
                        <ul class="nav nav-tabs " role="tablist">
                            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#general" role="tab"
                                                    aria-expanded="false"><span class="hidden-sm-up"><i
                                                class="ti-home"></i></span> <span class="hidden-xs-down"><b>General</b></span>
                                </a>
                            </li>

                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#seo"
                                                    role="tab" aria-expanded="true"><span class="hidden-sm-up"><i
                                                class="ti-user"></i></span> <span
                                            class="hidden-xs-down"><b>SEO</b></span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#language"
                                                    role="tab" aria-expanded="true"><span class="hidden-sm-up"><i
                                                class="ti-user"></i></span> <span class="hidden-xs-down"><b>Language</b></span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#mail"
                                                    role="tab" aria-expanded="true"><span class="hidden-sm-up"><i
                                                class="ti-user"></i></span> <span
                                            class="hidden-xs-down"><b>Mail</b></span></a>
                            </li>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#social_media"
                                                    role="tab" aria-expanded="true"><span class="hidden-sm-up"><i
                                                class="ti-user"></i></span> <span
                                            class="hidden-xs-down"><b>Social</b></span></a>
                            </li>

                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#others" role="tab"
                                                    aria-expanded="false"><span class="hidden-sm-up"><i
                                                class="ti-email"></i></span><span
                                            class="hidden-xs-down">Others</span></a></li>
                        </ul>


                        <!---------------------------------------- Tab panes contents-------------------------- -->

                        <div class="tab-content">
                            <div class="tab-pane active" id="general" role="tabpanel" aria-expanded="false">
                                <div class="p-20">
                                    <h3>General Settings</h3>
                                    <h4>you can use it with the small code</h4>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                        justo, rhoncus ut, imperdiet a.</p>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Site URL</label><input
                                                            type="text" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Site Title</label><input
                                                            type="text" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Site Description</label><input
                                                            type="text" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Google Analytics Code</label><textarea
                                                            type="text" class="form-control"></textarea></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Mailchimp Signup Form</label><textarea
                                                            type="text" class="form-control"></textarea></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Logo</label><input
                                                            type="file" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Favicon</label><input
                                                            type="file" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Timezone</label><select
                                                            type="text" class="form-control"></select></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Site Active? (Maintenance Mode)</label><select
                                                            type="text" class="form-control"></select></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Maintenance Mode Message</label><input
                                                            type="text" class="form-control"></input></div>


                                                <h3>Others</h3>
                                                <hr>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Header</label><input
                                                            type="text" class="form-control"></input></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        Footer</label><input
                                                            type="text" class="form-control"></input></div>


                                                <h3>Google Captcha</h3>
                                                <hr>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        App ID</label><input
                                                            type="text" class="form-control"></input></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">
                                                        App SECRET</label><input
                                                            type="text" class="form-control"></input></div>


                                                <div class="form-group"><input
                                                            type="radio" class="form-control"></input>
                                                    <label for=""
                                                           class="label-control">
                                                        Generate Sitemap?</label>
                                                    <label for="">If checked sitemap will be generated at
                                                        http://phpdummies.com/sitemap.xml</label>
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save Settings</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="seo" role="tabpanel" aria-expanded="false">
                                <div class="p-20">
                                    <h3>SEO Settings</h3>
                                    <h4>you can use it with the small code</h4>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                        justo, rhoncus ut, imperdiet a.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="form-group"><label for=""
                                                                               class="label-control">SEO
                                                        Keywords</label><input
                                                            type="text" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">SEO
                                                        Description</label><input
                                                            type="text" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">Google Webmaster
                                                        Domain Verify</label><input
                                                            type="text" class="form-control"></div>
                                                <div class="form-group"><label for=""
                                                                               class="label-control">Bing Webmaster
                                                        Domain Verify</label><input
                                                            type="text" class="form-control"></div>
                                                <button type="submit" class="btn btn-primary">Save Settings</button>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="language" role="tabpanel" aria-expanded="false">
                                <div class="p-20">
                                    <h3>Language Settings</h3>
                                    <h4>you can use it with the small code</h4>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                        justo, rhoncus ut, imperdiet a.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form">
                                                <div class="form-group"><label for="">Primary Language</label><select
                                                            class="form-control">
                                                        <option value="">En</option>
                                                        <option value="">Bn</option>
                                                    </select>
                                                </div>
                                                <div class="form-group"><label for="">Secondary Language</label><select
                                                            class="form-control">
                                                        <option value="">Bn</option>
                                                        <option value="">En</option>
                                                    </select>
                                                </div>
                                                <button type="submit" class="btn btn-primary">Save Settings</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="mail" role="tabpanel" aria-expanded="false">
                                <div class="p-20">
                                    <h3>Mail Settings</h3>
                                    <h4>you can use it with the small code</h4>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                        justo, rhoncus ut, imperdiet a.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="form-group">
                                                    <label for="">MAIL DRIVER</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">MAIL HOST</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">MAIL PORT</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">MAIL USERNAME</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">MAIL PASSWORD</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div class="form-group">
                                                    <label for="" class="control-label">MAIL ENCRYPTION</label>
                                                    <input type="text" class="form-control" placeholder="">
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Save Settings</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="social_media" role="tabpanel" aria-expanded="false">
                                <div class="p-20">
                                    <h3>Social Media Settings</h3>
                                    <h4>you can use it with the small code</h4>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                        justo, rhoncus ut, imperdiet a.</p>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <div class="form-group"><label
                                                            for=""><i class="btn btn-facebook">f</i> Facebook Page
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label
                                                            for=""><i class="btn btn-twitter">t</i> Twitter
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label for=""><i
                                                                class="btn btn-googleplus">g+</i> Google
                                                        Page URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label for=""><i
                                                                class="btn btn-instagram">ins</i> Instagram
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>

                                                </br>
                                                </br>
                                                <h3><i class="btn btn-facebook">f</i>Facebook</h3>
                                                <hr>
                                                <div class="form-group"><label for="">App ID
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label for="">App Secret
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>

                                                <h3><i class="btn btn-twitter">t</i> Twitter</h3>
                                                <hr>
                                                <div class="form-group"><label for="">App ID
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label for="">App Secret
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>

                                                <h3><i class="btn btn-googleplus">g+</i> Google</h3>
                                                <hr>
                                                <div class="form-group"><label for="">App ID
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label for="">App Secret
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>

                                                <h3><i class="btn btn-instagram">ins</i> Instagram</h3>
                                                <hr>
                                                <div class="form-group"><label for="">App ID
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>
                                                <div class="form-group"><label for="">App Secret
                                                        URL</label><input
                                                            type="text"
                                                            class="form-control">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Save Settings</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane" id="others" role="tabpanel" aria-expanded="false">
                                <div class="p-20">
                                    <h3>Others Settings</h3>
                                    <h4>you can use it with the small code</h4>
                                    <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim
                                        justo, rhoncus ut, imperdiet a.</p>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <form action="">
                                                <h3>Email Template</h3>
                                                <hr>
                                                <div class="form-group"><label
                                                            for="">Email template design</label><textarea
                                                            type="text"
                                                            class="form-control"></textarea>
                                                </div>
                                                <h3>Site Optimization </h3>
                                                <hr>
                                                <li>Database optimization</li>
                                                <li>Create Cache</li>
                                                <li>Clear Cache</li>
                                                <li>Remove old/bulk data</li>
                                                <br>

                                                <h3>Backup Settings</h3>
                                                <hr>
                                                <li>database backup</li>
                                                <li>media backup</li>
                                                <li>hole site backup</li>
                                                <br>

                                                <h3>Cron Job Settings</h3>
                                                <hr>

                                                <button type="submit" class="btn btn-primary">Save Settings</button>
                                            </form>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('script')
@stop

