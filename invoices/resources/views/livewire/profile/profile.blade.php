<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <section class="users-edit">
        <div class="card">

            <div class="card-content">
                <div class="card-body">
                    <ul class="nav nav-tabs mb-3" role="tablist">
                        <li class="nav-item">

                                <span class="d-none d-sm-block">تعديل البيانات الشخصية </span>
                            </a>
                        </li>

                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">


                            <!-- users edit account form start -->
                            <form  id="data_form_user" wire:submit.prevent="save" enctype="multipart/form-data">
                                <div class="row">

                                    <div class="col-12 col-sm-8">

                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <span>الاسم</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" class="form-control" wire:model="user.name"  name="name"  placeholder="الاسم">
                                                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <span>البريد الالكتروني</span>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text"  class="form-control"  name="email" wire:model="user.email">

                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-md-2">
                                                <span>كلمة المرور </span>
                                            </div>
                                            <div class="col-md-8">
                                                <input wire:model="password" type="password" name="password" class="form-control" placeholder="كلمة المرور  " >

                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-12 col-sm-4">
                                        <h4 style="text-align: center"> تغيير الصورة</h4>
                                        <div class="upload-btn-wrapper mx-auto">
                                            <div class="upload-btn">
                                                @if($image)

                                                    <img src="{{$image->temporaryUrl()}}">
                                                @else
                                                    @if($user)
                                                        <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$user->image?asset('storage/images/'.$user->image):asset('storage/images/no-image.png')}}">

{{--                                                        <img style="border: 3px solid #D3D3D3; border-radius: 15px; width: 100%; height: 100%" src="{{$image?asset('storage/images/'.$image):asset('storage/images/no-image.png')}}">--}}

                                                @endif
                                                @endif


                                            </div>
                                            <input type="file" class="profile-img-input"  id="image"   wire:model="image" name="image" >

                                            @error('user.image') <span class="text-danger">{{ $message }}</span>@enderror
                                        </div>


                                    </div>


                                </div>

                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1" >
                                    <button type="submit" class="btn btn-success glow mb-1 mb-sm-0 mr-0 mr-sm-1">حفظ
                                    </button>
                                    <button  onclick="location.href = '/dashboard';" class="btn btn-outline-danger">الغاء</button>
                                </div>
                            </form>
                            <!-- users edit account form ends -->
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

