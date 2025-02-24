<?php

/**
 * Copyright © Michał Biarda. All rights reserved.
 * See LICENSE.txt for license details.
 */

declare(strict_types=1);

namespace MB\ShipXSDK\Model;

use DateTime;
use MB\ShipXSDK\DataTransferObject\DataTransferObject;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Casters\ArrayCaster;

/**
 * @SuppressWarnings(PHPMD.TooManyFields)
 */
class Shipment extends DataTransferObject
{
    public string $href;

    public int $id;

    public string $status;

    /**
     * @var ParcelsSimple[]
     */
    #[CastWith(ArrayCaster::class, itemType: ParcelsSimple::class)]
    public array $parcels;

    /**
     * @todo Check what is the correct type
     */
    public ?string $external_customer_id;

    public ?MpkSimple $mpk;

    public ?string $comments;

    public ?ShipmentCustomAttributes $custom_attributes;

    public TransactionParty $sender;

    public TransactionParty $receiver;

    /**
     * @todo Check what is the correct type
     */
    public ?int $created_by_id;

    public ?PriceOptional $cod;

    public ?PriceOptional $insurance;

    /**
     * @var string[]|null
     */
    public ?array $additional_services;

    public ?string $reference;

    public ?bool $is_return;

    public ?string $tracking_number;

    /**
     * @var Offer[]
     */
    #[CastWith(ArrayCaster::class, itemType: Offer::class)]
    public array $offers;

    public ?Offer $selected_offer;

    /**
     * @var Transaction[]
     */
    #[CastWith(ArrayCaster::class, itemType: Transaction::class)]
    public ?array $transactions;

    public ?bool $end_of_week_collection;

    public DateTime $created_at;

    public DateTime $updated_at;
}
