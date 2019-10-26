<?php

namespace iamgold\cinema;

/**
 * This class is used to access member API.
 *
 * @author Eric Huang <iamgold0105@gmail.com>
 * @version 1.0.0
 * @since 2.0.0
 */
class Member extends BaseObject
{
    /**
     * @var string API PATH
     */
    protected $apiPath = 'api/api_member.php';

    /**
     * @var array $methods
     */
    protected $methods = [
        'changePassword',
        'createMemberCardRegisterCCLog',
        'createMemberCardRenewCCLog',
        'forgotPassword',
        'getBirthGiftInf',
        'getEditableMemberData',
        'getLoginData',
        'getMovieTypes',
        'getNextValidDate',
        'getOrderDetail',
        'getSessionID',
        'isLogin',
        'listAllCards',
        'listBonusItems',
        'listBonusTypes',
        'memberCardRegister',
        'memberCardRenew',
        'memberLogin',
        'memberLogout',
        'memberPreRegister',
        'orderCancel',
        'queryBonusRecord',
        'queryCreditRecord',
        'queryOrderRecord',
        'queryWebOrder',
        'resetPasswordByToken',
        'updateMemberData',
        'webMemberRegister'
    ];
}
