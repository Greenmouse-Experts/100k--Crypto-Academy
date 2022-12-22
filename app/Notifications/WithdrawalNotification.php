<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalNotification extends Notification
{
    use Queueable;

    private $new_user;
    private $trans;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Transaction $trans, User $new_user)
    {
        $this->trans = $trans;
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
                ->subject('Withdrawal on 100kCrypto Investing')
                ->greeting('Hello '.$this->new_user->name.',')
                ->line('Hope you\'re. doing well. You make a withdrawal request on 100kCrypto Investing.')
                ->line('This is to notify you that your withdraw is posted successfully and our admin are reviewing with your transaction, if confirmed your withdraw will be posted to your wallet address in the next 1 hour.')
                ->line('Amount: '.'$'.number_format($this->trans->amount, 2))
                ->line('Wallet Address: '.$this->trans->address)
                ->line('Thank you for using our platform!')
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
