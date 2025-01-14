<?php

namespace App\Livewire;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\ContactUsMessage;
use App\Models\SocialLink;

class ContactUs extends Component
{
    public $name, $email, $phone, $subject, $message;
    public $socialLinks;

    public function mount()
    {
        $this->socialLinks = SocialLink::all();
    }

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|string|max:15',
        'subject' => 'nullable|string|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();
        ContactUsMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'message' => $this->message,
        ]);

        $this->reset(['name', 'email', 'phone', 'subject', 'message']);
        return redirect()->back()->with('success', 'Your message has been sent successfully!');

    }
    #[Title('Contact Us')]
    public function render()
    {
        return view('livewire.contact-us');
    }
}
