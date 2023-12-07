<?php

namespace App\Http\Livewire;


use App\Events\SendRequestNotification;
use Livewire\Component;
use Livewire\WithFileUploads;
use DB;
use Illuminate\Support\Facades\Hash;
class Setting extends Component
{
    use WithFileUploads;
    public $photo,$name,$phone,$bio,$city,$country,$About;
    public $curPassword,$newPassword,$confirmPassword, $passwordErr='';
    public $facebook,$twitter,$instagrame;
    
    public function mount(){
        $this->name = \Auth::user()->name ?? '';
        $this->phone = \Auth::user()->phone ?? '';
        $this->bio = \Auth::user()->bio ?? '';
        $this->city = \Auth::user()->city ?? '';
        $this->country = \Auth::user()->country ?? '';
        $this->About = \Auth::user()->about ?? '';
       
    }
    public function render()
    {
        return view('livewire.setting');
        
    }

    public function sendReqNoti() {
        event(new SendRequestNotification(2));
    }
    protected $rules = [
        'photo' => ['required','image'],
        'name' => 'required',
        'phone' => 'required',
        'bio' => 'required',
        'city' => 'required',
        'country' => 'required',
        'About'=>'required',
    ];
    public function updateBio()
    {
          $this->validate($this->rules);
          sleep(1);
          $data = [];
          $data['name'] = $this->name;
          $data['phone'] = $this->phone;
          $data['bio'] = $this->bio;
          $data['city']= $this->city;
          $data['country'] = $this->country;
          $data['about'] = $this->About;
          $imageName = uniqid().'.'.$this->photo->extension();
          $this->photo->storeAs('profilePicture',$imageName);
          $imagePath = asset('uploads/profilePicture').'/'.$imageName;
          $data['image'] = $imagePath;
          DB::table('users')->where('id', \Auth::user()->id)->update($data);
          return redirect()->route('chatmain');

    }
    public function changePassword()
    {
      sleep(2);
        $currentPassword = \Auth::user()->str_password;
       if($this->curPassword == $currentPassword ){
               if($this->newPassword == $this->confirmPassword){
                   $password =  Hash::make($this->newPassword);
                   DB::table('users')->where('id',\AUTH::user()->id)->update([
                    'password' => $password,
                    'str_password' => $this->newPassword,
                   ]);
               }else {
                $this->passwordErr='Confirm password does not match';
               }
       } else {
        $this->passwordErr="Current password does not match";
       }
    
    }
}
