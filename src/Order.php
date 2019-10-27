<?php

namespace cinemasdk;

/**
 * This class is used to access order API.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 * @since 2.0.0
 */
class Movie extends BaseObject
{
    /**
     * @var string API PATH
     */
    protected $apiPath = 'api/api_web_order.php';

    /**
     * @var array $methods
     */
    protected $methods = [
        'addSeat',
        'chargeByCreditCard',
        'checkOrder',
        'clear',
        'createCreditCardLog',
        'getCreditCardLogStatus',
        'getLoginData',
        'getMovieInfo',
        'getMovies',
        'getOrderDetail',
        'getOrderNo',
        'getSelectedMovie',
        'getSelectedSeatCount',
        'getSelectedSeats',
        'getSelectedStage',
        'getSelectedTicketCombo',
        'getSelectedTicketCount',
        'getStageDates',
        'getStages',
        'getStageSeats',
        'getTicketCombos',
        'getItemCombos',
        'getItems',
        'isCreditEnough',
        'isCreditCardPay',
        'isCreditPay',
        'isDateSelected',
        'isLogin',
        'isMember',
        'isMovieSelected',
        'isStageSelected',
        'isWebMember',
        'memberLogin',
        'orderConfirm',
        'payByCredit',
        'payByCreditCard',
        'resetSeat',
        'selectDate',
        'selectMovie',
        'selectTicketCombos',
        'sendSeats',
        'sendTicketCombos',
        'sendItemCombos',
        'sendItems',
        'selectStage',
        'start',
        'unsetSeat',
        'unsetTicketCombo',
        'webMemberRegister'
    ];
}
