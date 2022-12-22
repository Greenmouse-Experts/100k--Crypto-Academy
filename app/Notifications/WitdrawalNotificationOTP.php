<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WitdrawalNotificationOTP extends Notification
{
    use Queueable;
    private $new_user;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $new_user)
    {
        $this->new_user = $new_user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Withdrawal OTP')
                    ->line('Hi '.$this->new_user->name.',')
                    ->line('You requested a withdraw on '. config('app.name'). '! Before you proceed, we need you to confirm your account. Please enter the 6-digit code to
                            verify your account.')
                    ->line('Your verification code is: ' . $this->new_user->code)
                    ->line("If you didn't make this request, there’s nothing to worry about — you can safely ignore this email.")
                    ->line('If you have any questions, please visit our FAQ page or contact us.');
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
            //
        ];
    }
}
