@extends('home.principaldashboard')


    @section('content')

    <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-two">
                                    <header>
                                        <div class="avatar">
                                            <img src="https://randomuser.me/api/portraits/women/21.jpg" alt="Allison Walker" />
                                        </div>
                                    </header>

                                    <h3>{{ auth()->user()->nombre}} {{ auth()->user()->apellidos}}</h3>
                                    <div class="desc">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit et cupiditate deleniti.
                                    </div>
                                    <div class="contacts">
                                        <a href=""><i class="fa fa-plus"></i></a>
                                        <a href=""><i class="fa fa-whatsapp"></i></a>
                                        <a href=""><i class="fa fa-envelope"></i></a>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-12">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Recomendaciones</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Perfil</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings" role="tab">Configuracion</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="images/users/avatar-1.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <p>assign a new task <a href="#"> Design weblayout</a></p>
                                                        <div class="row">
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img1.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img2.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img3.jpg" class="img-responsive radius" /></div>
                                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="images/big/img4.jpg" class="img-responsive radius" /></div>
                                                        </div>
                                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="images/users/avatar-2.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div> <a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <div class="m-t-20 row">
                                                            <div class="col-md-3 col-xs-12"><img src="images/big/img1.jpg" alt="user" class="img-responsive radius" /></div>
                                                            <div class="col-md-9 col-xs-12">
                                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="#" class="btn btn-success"> Design weblayout</a></div>
                                                        </div>
                                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="images/users/avatar-3.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum.
                                                            Praesent mauris. Fusce nec tellus sed augue semper </p>
                                                    </div>
                                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="sl-item">
                                                <div class="sl-left"> <img src="images/users/avatar-4.jpg" alt="user" class="img-circle" /> </div>
                                                <div class="sl-right">
                                                    <div><a href="#" class="link">Michael Qin</a> <span class="sl-date">5 minutes ago</span>
                                                        <blockquote class="m-t-10">
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                                        </blockquote>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Nombre</strong>
                                                <br>
                                                <p class="text-muted">{{ auth()->user()->nombre}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Apellidos</strong>
                                                <br>
                                                <p class="text-muted">{{ auth()->user()->apellidos}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Correo</strong>
                                                <br>
                                                <p class="text-muted">{{ auth()->user()->email}}</p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Celular</strong>
                                                <br>
                                                <p class="text-muted">{{ auth()->user()->celular}}</p>
                                            </div>
                                        </div>
                                        <hr>
                                        <p class="m-t-30">Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book. It has survived not only five centuries </p>
                                        <p>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                                        </p>
                                       
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material">
                                            <div class="form-group">
                                                <label class="col-md-12">Nombre</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{ auth()->user()->nombre}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Correo</label>
                                                <div class="col-md-12">
                                                    <input type="email" placeholder="{{ auth()->user()->email}}" class="form-control form-control-line" name="example-email" id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contraseña</label>
                                                <div class="col-md-12">
                                                    <input type="password" value="password" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Celular</label>
                                                <div class="col-md-12">
                                                    <input type="text" placeholder="{{ auth()->user()->celular}}" class="form-control form-control-line">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Descripcion</label>
                                                <div class="col-md-12">
                                                    <textarea rows="5" class="form-control form-control-line"></textarea>
                                                </div>
                                            </div>
         
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success">Actualizar perfil</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>

                <!-- End PAge Content -->
            </div>
            
        </div>
        <!-- End Page wrapper  -->
    </div>

    <div class="modal"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="changePassModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="javascript:;" novalidate="novalidate">
                    <div class="modal-header">
                    <h5 class="modal-title">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="form-group">
                                <label for="oldPass">
                                    old Password
                                </label>
                                <input type="password"  data-val="true" data-val-required="this is Required Field" class="form-control" name="oldPass" id="oldPass"/>
                                <span class="field-validation-valid text-danger" data-valmsg-for="oldPass" data-valmsg-replace="true"></span>
                            </div>
                            <div class="form-group">
                                <label for="newPass">
                                    New Password
                                </label>
                                <input type="password" data-val="true" data-val-required="this is Required Field" class="form-control" name="newPass" id="newPass"/>
                                <span class="field-validation-valid text-danger"  data-valmsg-for="newPass" data-valmsg-replace="true"></span>
                                
                            </div>
                            <div class="form-group">
                                <label for="confirmPass">
                                    Confirm Password
                                </label>
                                <input type="password" data-val-equalto="Password not Match ", data-val-equalto-other="newPass" data-val="true" data-val-required="this is Required Field" class="form-control" name="confirmPass" id="confirmPass"/>
                                <span class="field-validation-valid text-danger" data-valmsg-for="confirmPass" data-valmsg-replace="true"></span>
                                
                            </div>
                                        
                        </div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
          </div>
        </div>
      </div>

						
@stop