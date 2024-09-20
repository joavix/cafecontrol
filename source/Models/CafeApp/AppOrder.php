<?php

namespace Source\Models\CafeApp;

use Source\Core\Model;
use Source\Models\User;

class AppOrder extends Model
{
    public function __construct()
    {
        parent::__construct("app_orders", ["id"], ["user_id", "card_id", "subscription_id", "transaction", "amount", "status"]);
    }

    /**
     * @param User $user
     * @param AppPlan $plan
     * @param AppCreditCard $card
     * @return AppSubscription
     * @throws \Exception
     */
    public function subscribe(User $user, AppPlan $plan, AppCreditCard $card): AppSubscription
    {
        $this->user_id = $user->id;
        $this->plan->id = $plan->id;
        $this->card_id = $card->id;
        $this->status = "active";
        $this->pay_status = "active";
        $this->started = date("Y-m-d");

        $day = (new \DateTime($this->started))->format("d");

        if ($day <= 28) {
            $this->due_day = $day;
            $this->next_due = date("Y-m-d", strtotime("+{$plan->period}"));
        } else {
            $due_day = 5;
            $next_due = date("Y-m-{$due_day}", strtotime("+{$plan->period}"));

            $this->due_day = $due_day;
            $this->next_due = date("Y-m-d", strtotime($next_due));
        }

        $this->last_charge = date("Y-m-d");
        $this->save();
        return $this;
    }

    /**
     * @param User $user
     * @param AppCreditCard $card
     * @param AppSubscription $sub
     * @param AppCreditCard $tr
     * @return $this
     */
    public function byCreditCard(User $user, AppCreditCard $card, AppSubscription $sub, AppCreditCard $tr): AppOrder
    {
        $this->user_id = $user->id;
        $this->card_id = $card->id;
        $this->subscription_id = $sub->id;
        $this->transaction = $tr->callback()->tid;
        $this->amount = number_format($tr->callback()->amount / 100, 2, ",", ".");
        $this->status = $tr->callback()->status;
        $this->save();
        return $this;
    }

    /**
     * @return mixed|Model|null
     */
    public function creditCard()
    {
        return (new AppCreditCard())->findById($this->card_id);
    }
}