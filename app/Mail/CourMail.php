<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use PhpParser\Node\Expr\Cast\String_;

class CourMail extends Mailable
{
    use Queueable, SerializesModels;
    public $etudiant ;
    public $id ;
    public $name ;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $etudiant , String $id , String $name)
    {
        $this->etudiant = $etudiant ;
        $this->id = $id ;
        $this->name = $name ;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('academiaenset@gmail.com')->view('email.courmail', [
            'etudiant' => $this->etudiant,
            'id' => $this->id ,
            'name' => $this->name,
        ]);
    }
}
