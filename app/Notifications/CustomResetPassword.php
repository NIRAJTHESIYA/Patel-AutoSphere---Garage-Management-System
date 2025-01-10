<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword as ResetPasswordNotification;
use Illuminate\Notifications\Messages\MailMessage;

class CustomResetPassword extends ResetPasswordNotification
{
    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Reset Your Password')
            ->greeting('Hello!')
            ->line('We received a request to reset your password.')
            ->action('Reset Password', url(config('app.url').route('password.reset', $this->token, false)))
            ->line('If you did not request a password reset, no further action is required.')
            ->salutation('Best Regards, ' . config('app.name'));
    }
}
