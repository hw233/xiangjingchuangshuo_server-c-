<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: SceneUser2.proto

namespace RO\Cmd {

  class User2Param extends \DrSlump\Protobuf\Enum {
    const USER2PARAM_GOCITY = 1;
    const USER2PARAM_SYSMSG = 2;
    const USER2PARAM_NPCDATASYNC = 3;
    const USER2PARAM_USERNINESYNC = 4;
    const USER2PARAM_ACTION = 5;
    const USER2PARAM_BUFFERSYNC = 6;
    const USER2PARAM_EXIT_POS = 7;
    const USER2PARAM_RELIVE = 8;
    const USER2PARAM_VAR = 9;
    const USER2PARAM_TALKINFO = 10;
    const USER2PARAM_SERVERTIME = 11;
    const USER2PARAM_NEWTRANSMAP = 12;
    const USER2PARAM_EFFECT = 14;
    const USER2PARAM_MENU = 15;
    const USER2PARAM_NEWMENU = 16;
    const USER2PARAM_TEAMINFONINE = 17;
    const USER2PARAM_USEPORTRAIT = 18;
    const USER2PARAM_USEFRAME = 19;
    const USER2PARAM_NEWPORTRAITFRAME = 20;
    const USER2PARAM_QUERYPORTRAITLIST = 24;
    const USER2PARAM_ADDATTRPOINT = 21;
    const USER2PARAM_QUERYSHOPGOTITEM = 22;
    const USER2PARAM_UPDATESHOPGOTITEM = 23;
    const USER2PARAM_USEDRESSING = 25;
    const USER2PARAM_NEWDRESSING = 26;
    const USER2PARAM_DRESSINGLIST = 27;
    const USER2PARAM_OPENUI = 29;
    const USER2PARAM_DBGSYSMSG = 30;
    const USER2PARAM_FOLLOWTRANSFER = 32;
    const USER2PARAM_NPCFUNC = 33;
    const USER2PARAM_MODELSHOW = 34;
    const USER2PARAM_SOUNDEFFECT = 35;
    const USER2PARAM_PRESETCHATMSG = 36;
    const USER2PARAM_CHANGEBGM = 37;
    const USER2PARAM_QUERYFIGHTERINFO = 38;
    const USER2PARAM_GAMETIME = 40;
    const USER2PARAM_CDTIME = 41;
    const USER2PARAM_STATECHANGE = 42;
    const USER2PARAM_PHOTO = 44;
    const USER2PARAM_SHAKESCREEN = 45;
    const USER2PARAM_QUERYSHORTCUT = 47;
    const USER2PARAM_PUTSHORTCUT = 48;
    const USER2PARAM_NPCANGLE = 49;
    const USER2PARAM_CAMERAFOCUS = 50;
    const USER2PARAM_GOTO_LIST = 51;
    const USER2PARAM_GOTO_GEAR = 52;
    const USER2PARAM_FOLLOWER = 53;
    const USER2PARAM_LABORATORY = 54;
    const USER2PARAM_EXCHANGEPROFESSION = 56;
    const USER2PARAM_GOTO_LABORATORY = 57;
    const USER2PARAM_SCENERY = 58;
    const USER2PARAM_GOMAP_QUEST = 59;
    const USER2PARAM_GOMAP_FOLLOW = 60;
    const USER2PARAM_AUTOHIT = 61;
    const USER2PARAM_UPLOAD_SCENERY_PHOTO = 62;
    const USER2PARAM_QUERY_MAPAREA = 63;
    const USER2PARAM_NEW_MAPAREA = 64;
    const USER2PARAM_FOREVER_BUFF = 66;
    const USER2PARAM_INVITE_JOIN_HANDS = 67;
    const USER2PARAM_BREAK_UP_HANDS = 68;
    const USER2PARAM_QUERY_ACTION = 69;
    const USER2PARAM_MUSIC_LIST = 70;
    const USER2PARAM_MUSIC_DEMAND = 71;
    const USER2PARAM_MUSIC_CLOSE = 72;
    const USER2PARAM_UPLOAD_OK_SCENERY = 73;
    const USER2PARAM_JOIN_HANDS = 74;
    const USER2PARAM_QUERY_TRACE_LIST = 75;
    const USER2PARAM_UPDATE_TRACE_LIST = 76;
    const USER2PARAM_SET_DIRECTION = 77;
    const USER2PARAM_DOWNLOAD_SCENERY_PHOTO = 80;
    const USER2PARAM_BATTLE_TIMELEN_USER_CMD = 82;
    const USER2PARAM_SETOPTION = 83;
    const USER2PARAM_QUERYUSERINFO = 84;
    const USER2PARAM_COUNTDOWN_TICK = 85;
    const USER2PARAM_ITEM_MUSIC_NTF = 86;
    const USER2PARAM_SHAKETREE = 87;
    const USER2PARAM_TREELIST = 88;
    const USER2PARAM_ACTIVITY_NTF = 89;
    const USER2PARAM_QUERY_ZONESTATUS = 91;
    const USER2PARAM_JUMP_ZONE = 92;
    const USER2PARAM_ITEMIMAGE_USER_NTF = 93;
    const USER2PARAM_HANDSTATUS = 95;
    const USER2PARAM_BEFOLLOW = 96;
    const USER2PARAM_INVITEFOLLOW = 97;
    const USER2PARAM_CHANGENAME = 98;
    const USER2PARAM_CHARGEPLAY = 99;
    const USER2PARAM_REQUIRENPCFUNC = 100;
    const USER2PARAM_CHECK_SEAT = 101;
    const USER2PARAM_NTF_SEAT = 102;
    const USER2PARAM_SET_NORMALSKILL_OPTION = 103;
    const USER2PARAM_UNSOLVED_SCENERY_NTF = 104;
    const USER2PARAM_NTF_VISIBLENPC = 105;
    const USER2PARAM_NEW_SET_OPTION = 106;
    const USER2PARAM_UPYUN_AUTHORIZATION = 107;
    const USER2PARAM_TRANSFORM_PREDATA = 108;
    const USER2PARAM_USER_RENAME = 109;
    const USER2PARAM_ENTER_CAPRA_ACTIVITY = 110;
    const USER2PARAM_BUY_ZENY = 111;
    const USER2PARAM_CALL_TEAMER = 112;
    const USER2PARAM_CALL_TEAMER_JOIN = 113;
    const USER2PARAM_YOYO_SEAT = 114;
    const USER2PARAM_SHOW_SEAT = 115;
    const USER2PARAM_SPECIAL_EFFECT = 116;
    const USER2PARAM_MARRIAGE_PROPOSAL = 117;
    const USER2PARAM_MARRIAGE_PROPOSAL_REPLY = 118;
    const USER2PARAM_UPLOAD_WEDDING_PHOTO = 119;
    const USER2PARAM_MARRIAGE_PROPOSAL_SUCCESS = 120;
    const USER2PARAM_INVITEE_WEDDING_START_NTF = 121;
    const USER2PARAM_SERVANT_SHOW = 122;
    const USER2PARAM_SERVANT_REPLACE = 123;
    const USER2PARAM_SERVANT_SERVICE = 124;
    const USER2PARAM_SERVANT_RECOMMEND = 125;
    const USER2PARAM_SERVANT_RECEIVE = 126;
    const USER2PARAM_SERVANT_REWARD_STATUS = 127;
    const USER2PARAM_KFC_SHARE = 128;
    const USER2PARAM_TWINS_ACTION = 129;
    const USER2PARAM_CHECK_RELATION = 130;
    const USER2PARAM_PROFESSION_QUERY = 131;
    const USER2PARAM_PROFESSION_BUY = 132;
    const USER2PARAM_PROFESSION_CHANGE = 133;
    const USER2PARAM_UPDATE_RECORD_INFO = 134;
    const USER2PARAM_SAVE_RECORD = 135;
    const USER2PARAM_LOAD_RECORD = 136;
    const USER2PARAM_CHANGE_RECORD_NAME = 137;
    const USER2PARAM_BUY_RECORD_SLOT = 138;
    const USER2PARAM_DELETE_RECORD = 139;
    const USER2PARAM_UPDATE_BRANCH_INFO = 140;
    const USER2PARAM_GOTO_FUNCMAP = 141;
    const USER2PARAM_INVITE_WITH_ME = 142;
    const USER2PARAM_QUERY_ALTMAN_KILL = 143;
    const USER2PARAM_USER_BOOTH_REQ = 144;
    const USER2PARAM_BOOTH_INFO_SYNC = 145;
    const USER2PARAM_DRESSUP_MODEL = 146;
    const USER2PARAM_DRESSUP_HEAD = 147;
    const USER2PARAM_QUERY_STAGE = 148;
    const USER2PARAM_DRESSUP_LINEUP = 149;
    const USER2PARAM_DRESSUP_STAGE = 150;
    const USER2PARAM_DEATH_TRANSFER_LIST = 151;
    const USER2PARAM_NEW_DEATH_TRANSFER = 152;
    const USER2PARAM_TRANSFER = 153;
    const USER2PARAM_SERVANT_GROWTH = 154;
    const USER2PARAM_SERVANT_RECEIVE_GROWTH = 155;
    const USER2PARAM_SERVANT_GROWTH_OPEN = 156;
  }
}