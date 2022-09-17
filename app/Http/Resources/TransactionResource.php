<?php

namespace App\Http\Resources;

use App\Support\Constants\TransactionStatusConstant;
use App\Support\Constants\TransactionTypeConstant;
use Carbon\Carbon;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Lang;

class TransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request = null): array
    {
        return [
            Lang::get('transaction.id') => $this->id,
            Lang::get('transaction.origin_user') => $this->origin_user_id,
            Lang::get('transaction.destination_user') => $this->destination_user_id,
            Lang::get('transaction.type') => TransactionTypeConstant::NAMES[$this->transaction_type_id],
            Lang::get('transaction.original_amount') => 'R$ ' . number_format($this->original_amount / 100, 2, ',', '.'),
            Lang::get('transaction.amount_deducted') => 'R$ ' . number_format($this->amount_deducted / 100, 2, ',', '.'),
            Lang::get('transaction.amount_converted') => 'R$ ' . number_format($this->amount_converted / 100, 2, ',', '.'),
            Lang::get('transaction.amount_received') => 'R$ ' . number_format($this->amount_received / 100, 2, ',', '.'),
            Lang::get('transaction.origin_tax_total') => 'R$ ' . number_format($this->origin_tax_total / 100, 2, ',', '.'),
            Lang::get('transaction.destination_tax_total') => 'R$ ' . number_format($this->destination_tax_total / 100, 2, ',', '.'),
            Lang::get('transaction.origin_currency') => $this->origin_wallet_currency,
            Lang::get('transaction.destination_currency') => $this->destination_wallet_currency,
            Lang::get('transaction.created_at') => Carbon::parse($this->created_at)->format("d/m/Y H:i:s"),
            Lang::get('transaction.updated_at') => Carbon::parse($this->updated_at)->format("d/m/Y H:i:s"),
            Lang::get('transaction.status') => TransactionStatusConstant::NAMES[$this->transaction_status_id],
        ];
    }
}
