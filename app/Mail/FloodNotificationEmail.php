<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class FloodNotificationEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $level;
    public $location;

    /**
     * Create a new message instance.
     */
    public function __construct($level, $location)
    {
        $this->level = $level;
        $this->location = $location;
    }


    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Flood Notification Email',
        );
    }

    /**
     * Build the message content.
     */
    public function build()
    {
        return $this->view('notifications.emails.flood_notification')
                    ->subject('Flood Alert Warning')
                    ->with([
                        'level' => $this->level,
                        'location' => $this->location,
                    ]);
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
