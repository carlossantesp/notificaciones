<?php

namespace App\Notifications;

use App\Message;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MessageSent extends Notification
{
    use Queueable;

    protected $message;
    
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Message $message)
    {
        $this->message = $message;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database'];
        // return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // return (new MailMessage)
        //             ->line('Ha recibido un mensaje de la aplicacion')
        //             ->action('Ingresar a la notificacion', route('messages.show',$this->message->id))
        //             ->line('Gracias por usar nuestra aplicacion!');
        return (new MailMessage)->view('emails.email',[
            'msg' => $this->message,
            'user' => $notifiable
        ])->subject('Tiene un nuevo mensaje de la aplicacion');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'link' => route('messages.show',$this->message->id),
            'text' => 'Recibo un nuevo mensaje',
            'create_day' => now()->format('d M Y'),
            'content' => $this->message->content,
            'sender_user' => $this->message->sender->name
        ];
    }
}
