<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AdminAnnouncementNotification extends Notification
{
    use Queueable;

    public array $payload;

    public function __construct(array $payload)
    {
        $this->payload = $payload;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject($this->payload['subject'])
            ->line($this->payload['message'])
            ->line('Cordialement,')
            ->line(config('app.name'));
    }

    public function toDatabase($notifiable)
    {
        return [
            'subject' => $this->payload['subject'],
            'message' => $this->payload['message'],
        ];
    }
}
