<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewCandidate extends Notification
{
    use Queueable;

    protected $vacancyId;
    protected $vacancyTitle;
    protected $userId;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($vacancyId, $vacancyTitle, $userId)
    {
        $this->vacancyId = $vacancyId;
        $this->vacancyTitle = $vacancyTitle;
        $this->userId = $userId;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $url = url('/notifications');
        return (new MailMessage)
                    ->line('Hay un nuevo candidato en tu vacante!!')
                    ->line('Vacante: ' . $this->vacancyTitle)
                    ->action('Ver Notificaciones',$url)
                    ->line('Gracias por usar DevJobs!');
    }

    // almacenar las notificiones en la base de datos
    public function toDatabase($notifiable)
    {
        return [
            'vacancy_id' => $this->vacancyId,
            'vacancy_title' => $this->vacancyTitle,
            'user_id' => $this->userId
        ];
    }

    // /**
    //  * Get the array representation of the notification.
    //  *
    //  * @param  mixed  $notifiable
    //  * @return array
    //  */
    // public function toArray($notifiable)
    // {
    //     return [
    //         //
    //     ];
    // }
}
