<div>
    <div class="md:pl-16 pt-16">
        <div class="w-full md:w-full lg:w-3/4 p-6 mx-auto">
            <div class="intro-y text-xl font-medium">Settings</div>
            <div class="grid grid-cols-12 gap-6 mt-5">
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="intro-y box p-4">
                        @if(\Auth::user()->image!='')
                        <div class="mt-3 mb-3 text-center bg-info" style="display: flex; justify-content: center; align-items: center">
                            
                                <img src="{{\Auth::user()->image}}" alt="{{\Auth::user()->name}}" style="height: 90px; width: 90px; border-radius: 100px">
                            
                        </div>
                        @endif

                        <div>
                            <label for="setting-form-1" class="form-label">Photo</label>
                            <div class="image-upload border shadow-sm relative flex flex-col items-center justify-center rounded-md py-8 mt-3">
                                <div class="image-upload__icon w-12 h-12 rounded-full flex items-center justify-center"><i data-feather="image" class="w-5 h-5"></i></div>
                                <div class="image-upload__info mt-2">Choose your group profile photo</div>
                                <input type="file" wire:model="photo" class="w-full h-full top-0 left-0 absolute opacity-0" id="setting-form-1" />
                            </div>
                        </div>
                        

                        <div class="mt-3">
                            <label for="setting-form-2" class="form-label">{{$name}}</label>
                            <input type="text" wire:model.lazy="name" class="form-control" id="setting-form-2" />
                        </div>
                        <div class="mt-3">
                            <label for="setting-form-3" class="form-label">Phone</label>
                            <input type="text" wire:model.lazy="phone" class="form-control" id="setting-form-3" />
                        </div>
                        <div class="mt-3">
                            <label for="setting-form-4" class="form-label">City</label>
                            <input type="text" wire:model.lazy="city" class="form-control" id="setting-form-4" />
                        </div>
                        <div class="mt-3">
                            <label for="setting-form-99" class="form-label">Country</label>
                            <input type="text" wire:model.lazy="country" class="form-control" id="setting-form-99" />
                        </div>
                        <div class="mt-3">
                            <label for="setting-form-09" class="form-label">About</label>
                            <input type="text" wire:model.lazy="About" class="form-control" id="setting-form-09" />
                        </div>
                        <div class="mt-3">
                            <label for="setting-form-5" class="form-label">Bio</label>
                            <textarea class="form-control" wire:model="bio" rows="5" id="setting-form-5"></textarea>
                        </div>
                        <button type="button" wire:click="updateBio()" class="btn btn-primary w-full mt-3">Save Settings</button>
                    </div>
                    {{--
                    <div class="intro-y box p-4 mt-5">
                        <div class="flex items-center">
                            <div class="mr-auto">
                                <div class="">Echo Cancellation</div>
                                <div class="text-gray-500">Lorem Ipsum is simply dummy text of the printing</div>
                            </div>
                            <input type="checkbox" class="form-check-switch" />
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="mr-auto">
                                <div class="">Noise Reduction</div>
                                <div class="text-gray-500">Lorem Ipsum has been the industry's standard</div>
                            </div>
                            <input type="checkbox" class="form-check-switch" />
                        </div>
                        <div class="flex items-center mt-5">
                            <div class="mr-auto">
                                <div class="">Advanced Voice Activity</div>
                                <div class="text-gray-500">It was popularised in the 1960s</div>
                            </div>
                            <input type="checkbox" class="form-check-switch" />
                        </div>
                    </div>
                    --}}
                </div>
                <div class="intro-y col-span-12 lg:col-span-6">
                    <div class="intro-y box p-4">
                        @if($passwordErr!='')
                        <div class="mb-3 mt-3 alert alert-danger"> 
                          {{$passwordErr}}
                        </div>
                        @endif
                        <div class="mt-3">
                            <label for="change-password-1" class="form-label">Current Password</label>
                            <input type="text" wire:model.lazy="curPassword" class="form-control" id="change-password-1" placeholder="Current Password" />
                        </div>
                        <div class="mt-3">
                            <label for="change-password-2" class="form-label">New Password</label>
                            <input type="text" wire:model.lazy="newPassword" class="form-control" id="change-password-2" placeholder="New Password" />
                        </div>
                        <div class="mt-3">
                            <label for="change-password-3" class="form-label">Password Confirmation</label>
                            <input type="text" class="form-control" wire:model.lazy="confirmPassword" id="change-password-3" placeholder="Password Confirmation" />
                        </div>
                        <button class="btn btn-primary w-full mt-4" type="button"  wire:click="changePassword()">
                            <span  wire:loading.remove wire:target="changePassword" > ChangePassword</span>
                            <span wire:loading wire:target="changePassword()" >Loading..</span>
                        </button>
                    </div>
                    <div class="intro-y box p-4 mt-5">
                        <div>
                            <label for="social-media-form-1" class="form-label">Twitter</label>
                            <div class="input-group">
                                <div class="input-group-text"><i data-feather="twitter" class="w-4 h-4 mt-0.5"></i></div>
                                <input type="text" class="form-control" id="social-media-form-1" placeholder="Twitter Account" />
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="social-media-form-2" class="form-label">Facebook</label>
                            <div class="input-group">
                                <div class="input-group-text"><i data-feather="facebook" class="w-4 h-4 mt-0.5"></i></div>
                                <input type="text" class="form-control" id="social-media-form-2" placeholder="Facebook Account" />
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="social-media-form-3" class="form-label">Instagram</label>
                            <div class="input-group">
                                <div class="input-group-text"><i data-feather="instagram" class="w-4 h-4 mt-0.5"></i></div>
                                <input type="text" class="form-control" id="social-media-form-3" placeholder="Instagram Account" />
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="social-media-form-4" class="form-label">Github</label>
                            <div class="input-group">
                                <div class="input-group-text"><i data-feather="github" class="w-4 h-4 mt-0.5"></i></div>
                                <input type="text" class="form-control" id="social-media-form-4" placeholder="Github Account" />
                            </div>
                        </div>
                        <div class="mt-3">
                            <label for="social-media-form-5" class="form-label">Slack</label>
                            <div class="input-group">
                                <div class="input-group-text"><i data-feather="slack" class="w-4 h-4 mt-0.5"></i></div>
                                <input type="text" class="form-control" id="social-media-form-5" placeholder="Slack Account" />
                            </div>
                        </div>
                        <button class="btn btn-primary w-full mt-3">Save Settings</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
