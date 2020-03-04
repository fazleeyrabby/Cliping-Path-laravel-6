<?php
	namespace App\Mail;

use App\Invoice;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendEmail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public $invoices;
    public function __construct(Invoice $invoices)
    {
        $this->invoices = $invoices;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $invoices = Invoice::all();
        return $this->from('fazleyrabbicse@gmail.com')
            ->view('layouts.invoicepaid', compact('invoices'));
    }
}
?>