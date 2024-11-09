<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use NotificationChannels\Telegram\TelegramChannel;
use NotificationChannels\Telegram\TelegramMessage;

class PurchaseNotification extends Notification
{
    use Queueable;

    private $purchaseInfo;

    /**
     * Create a new notification instance.
     */
    public function __construct($purchaseInfo)
    {
        $this->purchaseInfo = $purchaseInfo;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return [TelegramChannel::class];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toTelegram($notifiable)
    {
        // dd($this->purchaseInfo);
        $name = $this->purchaseInfo->name;
        $packageName = $this->purchaseInfo->package->name;
        $speed = $this->purchaseInfo->package->speed;
        $price = $this->purchaseInfo->package->price;
        $mobile = $this->purchaseInfo->mobile;
        $email = $this->purchaseInfo->email;
        $address = $this->purchaseInfo->address;
        $district = $this->purchaseInfo->district;

        try{
            // $response = file_get_contents("https://api.telegram.org/bot7303609680:AAECZprnkz5IoWpsRB1FF-UG22OpRT0VjYg/sendMessage?chat_id=6273702003&text=Hello+world");
            // return $response;
            return TelegramMessage::create()
                ->to('-4534892797')
                ->content("New Purchase Order\nName: $name\nMobile: $mobile\nEmail: $email\nAddress: $address\nDistrict: $district\nPackage Name: $packageName\nSpeed: $speed MB\nPrice: $price Tk.");
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
