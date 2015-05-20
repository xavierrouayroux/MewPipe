var locale = Translator.locale;

var translations = {
    'yes': Translator.trans('yes'),
    'no': Translator.trans('no'),
    'weak': Translator.trans('weak'),
    'normal': Translator.trans('normal'),
    'medium': Translator.trans('medium'),
    'strong': Translator.trans('strong'),
    'very_strong': Translator.trans('very_strong'),
    'see_password': Translator.trans('see_password'),
    'lastName_firstName': Translator.trans('lastName_firstName'),
    'lastName_firstName_commercial': Translator.trans('lastName_firstName_commercial'),
    'field_is_required': Translator.trans('field_is_required'),
    'field_not_valid_email': Translator.trans('field_not_valid_email'),
    'waitingMessage': Translator.trans('waitingMessage')
};

var settings = {
    timeout: 12000,
    countdown: 60,
    title : Translator.trans('session_expired'),
    message : Translator.trans('logout_in_second'),
    question: Translator.trans('you_can_login'),
    keep_alive_button_text: Translator.trans('yes_keep_open_session'),
    sign_out_button_text: Translator.trans('no_logout'),
    keep_alive_url: '/keep-alive',
    logout_url: null,
    logout_redirect_url: '/',
    restart_on_yes: true,
    dialog_width: 350
};