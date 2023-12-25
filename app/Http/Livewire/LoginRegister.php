<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendTestMail;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Livewire\Component;

class LoginRegister extends Component
{
    public $users, $email, $password, $name;
    public $registerForm = false;

    /**
     * Render the Livewire component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.login-register');
    }

    /**
     * Input fields.
     *
     * @return void
     */
    private function resetInputFeilds()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    /**
     * Login.
     *
     * @return void
     */
    public function login()
    {
        $validatedData = $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user = User::where('email', $this->email)->first();
        if ($user && Hash::check($this->password, $user->password)) {
            session()->flash('message', 'You are logged in.');
        } else {
            session()->flash('error', 'Login failed.');
        }
    }

    /**
     * Register
     *
     * @return void
     */
    public function register()
    {
        $this->registerForm = !$this->registerForm;
    }

    /**
     * Data save .
     *
     * @return void
     */
    public function registerStore()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $this->password = Hash::make($this->password);
        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        Mail::to($this->email)->send(new SendTestMail($user));
        $this->resetInputFeilds();
    }
}
