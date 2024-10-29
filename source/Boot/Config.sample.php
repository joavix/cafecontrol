<?php

/**
 * DATABASE
 */
const CONF_DB_HOST = "localhost";
const CONF_DB_USER = "root";
const CONF_DB_PASS = "";
const CONF_DB_NAME = "cafecontrol";

/**
 * PROJECT URLs
 */
const CONF_URL_BASE = "http://www.cafecontrol.com.br";
const CONF_URL_TEST = "http://www.localhost/cafecontrol";

/**
 * SITE
 */
const CONF_SITE_NAME = "CaféControl";
const CONF_SITE_TITLE = "Gerencie suas contas com o melhor café";
const CONF_SITE_DESC = "O CafeControl é um gerenciador de contas simples, poderoso e gratuito. O prazer de tomar um café e ter o controle total de suas contas.";
const CONF_SITE_LANG = "pt_BR";
const CONF_SITE_DOMAIN = "";
const CONF_SITE_ADDR_STREET = "";
const CONF_SITE_ADDR_NUMBER = "";
const CONF_SITE_ADDR_COMPLEMENT = "";
const CONF_SITE_ADDR_CITY = "";
const CONF_SITE_ADDR_STATE = "";
const CONF_SITE_ADDR_ZIPCODE = "";

/**
 * SOCIAL
 */
const CONF_SOCIAL_TWITTER_CREATOR = "";
const CONF_SOCIAL_TWITTER_PUBLISHER = "";
const CONF_SOCIAL_FACEBOOK_APP = "";
const CONF_SOCIAL_FACEBOOK_PAGE = "";
const CONF_SOCIAL_FACEBOOK_AUTHOR = "";
const CONF_SOCIAL_GOOGLE_PAGE = "";
const CONF_SOCIAL_GOOGLE_AUTHOR = "";
const CONF_SOCIAL_INSTAGRAM_PAGE = "";
const CONF_SOCIAL_YOUTUBE_PAGE = "";

/**
 * DATES
 */
const CONF_DATE_BR = "d/m/Y H:i:s";
const CONF_DATE_APP = "Y-m-d H:i:s";

/**
 * PASSWORD
 */
const CONF_PASSWD_MIN_LEN = 8;
const CONF_PASSWD_MAX_LEN = 40;
const CONF_PASSWD_ALGO = PASSWORD_DEFAULT;
const CONF_PASSWD_OPTION = ["cost" => 10];

/**
 * VIEW
 */
const CONF_VIEW_PATH = __DIR__ . "/../../shared/views";
const CONF_VIEW_EXT = "php";
const CONF_VIEW_THEME = "cafeweb";
const CONF_VIEW_APP = "cafeapp";
const CONF_VIEW_ADMIN = "cafeadm";

/**
 * UPLOAD
 */
const CONF_UPLOAD_DIR = "storage";
const CONF_UPLOAD_IMAGE_DIR = "images";
const CONF_UPLOAD_FILE_DIR = "files";
const CONF_UPLOAD_MEDIA_DIR = "medias";

/**
 * IMAGES
 */
const CONF_IMAGE_CACHE = CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache";
const CONF_IMAGE_SIZE = 2000;
const CONF_IMAGE_QUALITY = ["jpg" => 75, "png" => 5];

/**
 * MAIL
 */
const CONF_MAIL_HOST = "";
const CONF_MAIL_PORT = "";
const CONF_MAIL_USER = "";
const CONF_MAIL_PASS = "";
const CONF_MAIL_SENDER = ["name" => "", "address" => ""];
const CONF_MAIL_SUPPORT = "";
const CONF_MAIL_OPTION_LANG = "br";
const CONF_MAIL_OPTION_HTML = true;
const CONF_MAIL_OPTION_AUTH = true;
const CONF_MAIL_OPTION_SECURE = "tls";
const CONF_MAIL_OPTION_CHARSET = "utf-8";

/**
 * PAGAR.ME 1.0
 *
 * const CONF_PAGARME_MODE = "test";
 * const CONF_PAGARME_LIVE = "ak_live_*****";
 * const CONF_PAGARME_TEST = "ak_test_*****";
 * const CONF_PAGARME_BACK = CONF_URL_BASE . "/pay/callback";
 *
 */

/*
 * PAGAR.ME V5
 */
const CONF_PAGARME_MODE = "test";
const CONF_PAGARME_LIVE = "sk_*****:"; // IMPORTANTE: Deixe os : (dois pontos) no final
const CONF_PAGARME_TEST = "sk_test_*******:"; // IMPORTANTE: Deixe os : (dois pontos) no final
