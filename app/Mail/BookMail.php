<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class BookMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $userName;
    protected $date;
    protected $time;
    protected $appointId;
    protected $serviceName;
    protected $appointedPerson;

    public function __construct($appointData , $appointId)
    {
        $this->userName         =   $appointData['first_name'].' '.$appointData['last_name'];
        $this->date             =   $appointData['datepick'];
        $this->time             =   $appointData['timepick'];
        $this->appointId        =   $appointId;
        $this->serviceName      =   $appointData['service_name'];
        $this->appointedPerson  =   $appointData['team_member_name'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('info@beauty.com')
            ->view('mail.addbooking')
            ->subject('Booking Added')
            ->with('userName' , $this->userName)
            ->with('date' , $this->date)
            ->with('time' , $this->time)
            ->with('appointId' , $this->appointId)
            ->with('serviceName' , $this->serviceName)
            ->with('appointedPerson' , $this->appointedPerson);
    }
}
