<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/js/659c308')) {
            // _assetic_659c308
            if ($pathinfo === '/js/659c308.js') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_659c308',);
            }

            if (0 === strpos($pathinfo, '/js/659c308_')) {
                // _assetic_659c308_0
                if ($pathinfo === '/js/659c308_constants_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_659c308_0',);
                }

                if (0 === strpos($pathinfo, '/js/659c308_jquery')) {
                    // _assetic_659c308_1
                    if ($pathinfo === '/js/659c308_jquery-1.10.2.min_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_659c308_1',);
                    }

                    // _assetic_659c308_2
                    if ($pathinfo === '/js/659c308_jqueryui-1.10.3.min_3.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_659c308_2',);
                    }

                    // _assetic_659c308_3
                    if ($pathinfo === '/js/659c308_jquery.blockUI.min_4.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_659c308_3',);
                    }

                }

                // _assetic_659c308_4
                if ($pathinfo === '/js/659c308_bootstrap.min_5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_659c308_4',);
                }

                // _assetic_659c308_5
                if ($pathinfo === '/js/659c308_enquire_6.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_659c308_5',);
                }

                if (0 === strpos($pathinfo, '/js/659c308_jquery.')) {
                    // _assetic_659c308_6
                    if ($pathinfo === '/js/659c308_jquery.cookie_7.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_659c308_6',);
                    }

                    // _assetic_659c308_7
                    if ($pathinfo === '/js/659c308_jquery.nicescroll.min_8.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_659c308_7',);
                    }

                }

                // _assetic_659c308_8
                if ($pathinfo === '/js/659c308_bootstrap-tagsinput_9.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_659c308_8',);
                }

                // _assetic_659c308_9
                if ($pathinfo === '/js/659c308_prettify_10.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_659c308_9',);
                }

                // _assetic_659c308_10
                if ($pathinfo === '/js/659c308_bootstrap-switch.min_11.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_659c308_10',);
                }

                // _assetic_659c308_11
                if ($pathinfo === '/js/659c308_placeholdr_12.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_659c308_11',);
                }

                // _assetic_659c308_12
                if ($pathinfo === '/js/659c308_application_13.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_659c308_12',);
                }

                if (0 === strpos($pathinfo, '/js/659c308_jquery')) {
                    if (0 === strpos($pathinfo, '/js/659c308_jquery.')) {
                        // _assetic_659c308_13
                        if ($pathinfo === '/js/659c308_jquery.dataTables_14.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 13,  '_format' => 'js',  '_route' => '_assetic_659c308_13',);
                        }

                        // _assetic_659c308_14
                        if ($pathinfo === '/js/659c308_jquery.maskMoney.min_15.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 14,  '_format' => 'js',  '_route' => '_assetic_659c308_14',);
                        }

                    }

                    // _assetic_659c308_15
                    if ($pathinfo === '/js/659c308_jquery-ui.min_16.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 15,  '_format' => 'js',  '_route' => '_assetic_659c308_15',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-')) {
                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-a')) {
                        // _assetic_659c308_16
                        if ($pathinfo === '/js/659c308_part_17_datepicker-af_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 16,  '_format' => 'js',  '_route' => '_assetic_659c308_16',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-ar')) {
                            // _assetic_659c308_17
                            if ($pathinfo === '/js/659c308_part_17_datepicker-ar-DZ_2.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 17,  '_format' => 'js',  '_route' => '_assetic_659c308_17',);
                            }

                            // _assetic_659c308_18
                            if ($pathinfo === '/js/659c308_part_17_datepicker-ar_3.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 18,  '_format' => 'js',  '_route' => '_assetic_659c308_18',);
                            }

                        }

                        // _assetic_659c308_19
                        if ($pathinfo === '/js/659c308_part_17_datepicker-az_4.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 19,  '_format' => 'js',  '_route' => '_assetic_659c308_19',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-b')) {
                        // _assetic_659c308_20
                        if ($pathinfo === '/js/659c308_part_17_datepicker-be_5.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 20,  '_format' => 'js',  '_route' => '_assetic_659c308_20',);
                        }

                        // _assetic_659c308_21
                        if ($pathinfo === '/js/659c308_part_17_datepicker-bg_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 21,  '_format' => 'js',  '_route' => '_assetic_659c308_21',);
                        }

                        // _assetic_659c308_22
                        if ($pathinfo === '/js/659c308_part_17_datepicker-bs_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 22,  '_format' => 'js',  '_route' => '_assetic_659c308_22',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-c')) {
                        // _assetic_659c308_23
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ca_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 23,  '_format' => 'js',  '_route' => '_assetic_659c308_23',);
                        }

                        // _assetic_659c308_24
                        if ($pathinfo === '/js/659c308_part_17_datepicker-cs_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 24,  '_format' => 'js',  '_route' => '_assetic_659c308_24',);
                        }

                        // _assetic_659c308_25
                        if ($pathinfo === '/js/659c308_part_17_datepicker-cy-GB_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 25,  '_format' => 'js',  '_route' => '_assetic_659c308_25',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-d')) {
                        // _assetic_659c308_26
                        if ($pathinfo === '/js/659c308_part_17_datepicker-da_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 26,  '_format' => 'js',  '_route' => '_assetic_659c308_26',);
                        }

                        // _assetic_659c308_27
                        if ($pathinfo === '/js/659c308_part_17_datepicker-de_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 27,  '_format' => 'js',  '_route' => '_assetic_659c308_27',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-e')) {
                        // _assetic_659c308_28
                        if ($pathinfo === '/js/659c308_part_17_datepicker-el_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 28,  '_format' => 'js',  '_route' => '_assetic_659c308_28',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-en-')) {
                            // _assetic_659c308_29
                            if ($pathinfo === '/js/659c308_part_17_datepicker-en-AU_14.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 29,  '_format' => 'js',  '_route' => '_assetic_659c308_29',);
                            }

                            // _assetic_659c308_30
                            if ($pathinfo === '/js/659c308_part_17_datepicker-en-GB_15.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 30,  '_format' => 'js',  '_route' => '_assetic_659c308_30',);
                            }

                            // _assetic_659c308_31
                            if ($pathinfo === '/js/659c308_part_17_datepicker-en-NZ_16.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 31,  '_format' => 'js',  '_route' => '_assetic_659c308_31',);
                            }

                        }

                        // _assetic_659c308_32
                        if ($pathinfo === '/js/659c308_part_17_datepicker-eo_17.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 32,  '_format' => 'js',  '_route' => '_assetic_659c308_32',);
                        }

                        // _assetic_659c308_33
                        if ($pathinfo === '/js/659c308_part_17_datepicker-es_18.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 33,  '_format' => 'js',  '_route' => '_assetic_659c308_33',);
                        }

                        // _assetic_659c308_34
                        if ($pathinfo === '/js/659c308_part_17_datepicker-et_19.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 34,  '_format' => 'js',  '_route' => '_assetic_659c308_34',);
                        }

                        // _assetic_659c308_35
                        if ($pathinfo === '/js/659c308_part_17_datepicker-eu_20.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 35,  '_format' => 'js',  '_route' => '_assetic_659c308_35',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-f')) {
                        // _assetic_659c308_36
                        if ($pathinfo === '/js/659c308_part_17_datepicker-fa_21.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 36,  '_format' => 'js',  '_route' => '_assetic_659c308_36',);
                        }

                        // _assetic_659c308_37
                        if ($pathinfo === '/js/659c308_part_17_datepicker-fi_22.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 37,  '_format' => 'js',  '_route' => '_assetic_659c308_37',);
                        }

                        // _assetic_659c308_38
                        if ($pathinfo === '/js/659c308_part_17_datepicker-fo_23.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 38,  '_format' => 'js',  '_route' => '_assetic_659c308_38',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-fr')) {
                            if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-fr-C')) {
                                // _assetic_659c308_39
                                if ($pathinfo === '/js/659c308_part_17_datepicker-fr-CA_24.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 39,  '_format' => 'js',  '_route' => '_assetic_659c308_39',);
                                }

                                // _assetic_659c308_40
                                if ($pathinfo === '/js/659c308_part_17_datepicker-fr-CH_25.js') {
                                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 40,  '_format' => 'js',  '_route' => '_assetic_659c308_40',);
                                }

                            }

                            // _assetic_659c308_41
                            if ($pathinfo === '/js/659c308_part_17_datepicker-fr_26.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 41,  '_format' => 'js',  '_route' => '_assetic_659c308_41',);
                            }

                        }

                    }

                    // _assetic_659c308_42
                    if ($pathinfo === '/js/659c308_part_17_datepicker-gl_27.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 42,  '_format' => 'js',  '_route' => '_assetic_659c308_42',);
                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-h')) {
                        // _assetic_659c308_43
                        if ($pathinfo === '/js/659c308_part_17_datepicker-he_28.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 43,  '_format' => 'js',  '_route' => '_assetic_659c308_43',);
                        }

                        // _assetic_659c308_44
                        if ($pathinfo === '/js/659c308_part_17_datepicker-hi_29.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 44,  '_format' => 'js',  '_route' => '_assetic_659c308_44',);
                        }

                        // _assetic_659c308_45
                        if ($pathinfo === '/js/659c308_part_17_datepicker-hr_30.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 45,  '_format' => 'js',  '_route' => '_assetic_659c308_45',);
                        }

                        // _assetic_659c308_46
                        if ($pathinfo === '/js/659c308_part_17_datepicker-hu_31.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 46,  '_format' => 'js',  '_route' => '_assetic_659c308_46',);
                        }

                        // _assetic_659c308_47
                        if ($pathinfo === '/js/659c308_part_17_datepicker-hy_32.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 47,  '_format' => 'js',  '_route' => '_assetic_659c308_47',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-i')) {
                        // _assetic_659c308_48
                        if ($pathinfo === '/js/659c308_part_17_datepicker-id_33.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 48,  '_format' => 'js',  '_route' => '_assetic_659c308_48',);
                        }

                        // _assetic_659c308_49
                        if ($pathinfo === '/js/659c308_part_17_datepicker-is_34.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 49,  '_format' => 'js',  '_route' => '_assetic_659c308_49',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-it')) {
                            // _assetic_659c308_50
                            if ($pathinfo === '/js/659c308_part_17_datepicker-it-CH_35.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 50,  '_format' => 'js',  '_route' => '_assetic_659c308_50',);
                            }

                            // _assetic_659c308_51
                            if ($pathinfo === '/js/659c308_part_17_datepicker-it_36.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 51,  '_format' => 'js',  '_route' => '_assetic_659c308_51',);
                            }

                        }

                    }

                    // _assetic_659c308_52
                    if ($pathinfo === '/js/659c308_part_17_datepicker-ja_37.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 52,  '_format' => 'js',  '_route' => '_assetic_659c308_52',);
                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-k')) {
                        // _assetic_659c308_53
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ka_38.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 53,  '_format' => 'js',  '_route' => '_assetic_659c308_53',);
                        }

                        // _assetic_659c308_54
                        if ($pathinfo === '/js/659c308_part_17_datepicker-kk_39.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 54,  '_format' => 'js',  '_route' => '_assetic_659c308_54',);
                        }

                        // _assetic_659c308_55
                        if ($pathinfo === '/js/659c308_part_17_datepicker-km_40.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 55,  '_format' => 'js',  '_route' => '_assetic_659c308_55',);
                        }

                        // _assetic_659c308_56
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ko_41.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 56,  '_format' => 'js',  '_route' => '_assetic_659c308_56',);
                        }

                        // _assetic_659c308_57
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ky_42.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 57,  '_format' => 'js',  '_route' => '_assetic_659c308_57',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-l')) {
                        // _assetic_659c308_58
                        if ($pathinfo === '/js/659c308_part_17_datepicker-lb_43.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 58,  '_format' => 'js',  '_route' => '_assetic_659c308_58',);
                        }

                        // _assetic_659c308_59
                        if ($pathinfo === '/js/659c308_part_17_datepicker-lt_44.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 59,  '_format' => 'js',  '_route' => '_assetic_659c308_59',);
                        }

                        // _assetic_659c308_60
                        if ($pathinfo === '/js/659c308_part_17_datepicker-lv_45.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 60,  '_format' => 'js',  '_route' => '_assetic_659c308_60',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-m')) {
                        // _assetic_659c308_61
                        if ($pathinfo === '/js/659c308_part_17_datepicker-mk_46.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 61,  '_format' => 'js',  '_route' => '_assetic_659c308_61',);
                        }

                        // _assetic_659c308_62
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ml_47.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 62,  '_format' => 'js',  '_route' => '_assetic_659c308_62',);
                        }

                        // _assetic_659c308_63
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ms_48.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 63,  '_format' => 'js',  '_route' => '_assetic_659c308_63',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-n')) {
                        // _assetic_659c308_64
                        if ($pathinfo === '/js/659c308_part_17_datepicker-nb_49.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 64,  '_format' => 'js',  '_route' => '_assetic_659c308_64',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-nl')) {
                            // _assetic_659c308_65
                            if ($pathinfo === '/js/659c308_part_17_datepicker-nl-BE_50.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 65,  '_format' => 'js',  '_route' => '_assetic_659c308_65',);
                            }

                            // _assetic_659c308_66
                            if ($pathinfo === '/js/659c308_part_17_datepicker-nl_51.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 66,  '_format' => 'js',  '_route' => '_assetic_659c308_66',);
                            }

                        }

                        // _assetic_659c308_67
                        if ($pathinfo === '/js/659c308_part_17_datepicker-nn_52.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 67,  '_format' => 'js',  '_route' => '_assetic_659c308_67',);
                        }

                        // _assetic_659c308_68
                        if ($pathinfo === '/js/659c308_part_17_datepicker-no_53.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 68,  '_format' => 'js',  '_route' => '_assetic_659c308_68',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-p')) {
                        // _assetic_659c308_69
                        if ($pathinfo === '/js/659c308_part_17_datepicker-pl_54.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 69,  '_format' => 'js',  '_route' => '_assetic_659c308_69',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-pt')) {
                            // _assetic_659c308_70
                            if ($pathinfo === '/js/659c308_part_17_datepicker-pt-BR_55.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 70,  '_format' => 'js',  '_route' => '_assetic_659c308_70',);
                            }

                            // _assetic_659c308_71
                            if ($pathinfo === '/js/659c308_part_17_datepicker-pt_56.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 71,  '_format' => 'js',  '_route' => '_assetic_659c308_71',);
                            }

                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-r')) {
                        // _assetic_659c308_72
                        if ($pathinfo === '/js/659c308_part_17_datepicker-rm_57.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 72,  '_format' => 'js',  '_route' => '_assetic_659c308_72',);
                        }

                        // _assetic_659c308_73
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ro_58.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 73,  '_format' => 'js',  '_route' => '_assetic_659c308_73',);
                        }

                        // _assetic_659c308_74
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ru_59.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 74,  '_format' => 'js',  '_route' => '_assetic_659c308_74',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-s')) {
                        // _assetic_659c308_75
                        if ($pathinfo === '/js/659c308_part_17_datepicker-sk_60.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 75,  '_format' => 'js',  '_route' => '_assetic_659c308_75',);
                        }

                        // _assetic_659c308_76
                        if ($pathinfo === '/js/659c308_part_17_datepicker-sl_61.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 76,  '_format' => 'js',  '_route' => '_assetic_659c308_76',);
                        }

                        // _assetic_659c308_77
                        if ($pathinfo === '/js/659c308_part_17_datepicker-sq_62.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 77,  '_format' => 'js',  '_route' => '_assetic_659c308_77',);
                        }

                        if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-sr')) {
                            // _assetic_659c308_78
                            if ($pathinfo === '/js/659c308_part_17_datepicker-sr-SR_63.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 78,  '_format' => 'js',  '_route' => '_assetic_659c308_78',);
                            }

                            // _assetic_659c308_79
                            if ($pathinfo === '/js/659c308_part_17_datepicker-sr_64.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 79,  '_format' => 'js',  '_route' => '_assetic_659c308_79',);
                            }

                        }

                        // _assetic_659c308_80
                        if ($pathinfo === '/js/659c308_part_17_datepicker-sv_65.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 80,  '_format' => 'js',  '_route' => '_assetic_659c308_80',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-t')) {
                        // _assetic_659c308_81
                        if ($pathinfo === '/js/659c308_part_17_datepicker-ta_66.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 81,  '_format' => 'js',  '_route' => '_assetic_659c308_81',);
                        }

                        // _assetic_659c308_82
                        if ($pathinfo === '/js/659c308_part_17_datepicker-th_67.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 82,  '_format' => 'js',  '_route' => '_assetic_659c308_82',);
                        }

                        // _assetic_659c308_83
                        if ($pathinfo === '/js/659c308_part_17_datepicker-tj_68.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 83,  '_format' => 'js',  '_route' => '_assetic_659c308_83',);
                        }

                        // _assetic_659c308_84
                        if ($pathinfo === '/js/659c308_part_17_datepicker-tr_69.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 84,  '_format' => 'js',  '_route' => '_assetic_659c308_84',);
                        }

                    }

                    // _assetic_659c308_85
                    if ($pathinfo === '/js/659c308_part_17_datepicker-uk_70.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 85,  '_format' => 'js',  '_route' => '_assetic_659c308_85',);
                    }

                    // _assetic_659c308_86
                    if ($pathinfo === '/js/659c308_part_17_datepicker-vi_71.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 86,  '_format' => 'js',  '_route' => '_assetic_659c308_86',);
                    }

                    if (0 === strpos($pathinfo, '/js/659c308_part_17_datepicker-zh-')) {
                        // _assetic_659c308_87
                        if ($pathinfo === '/js/659c308_part_17_datepicker-zh-CN_72.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 87,  '_format' => 'js',  '_route' => '_assetic_659c308_87',);
                        }

                        // _assetic_659c308_88
                        if ($pathinfo === '/js/659c308_part_17_datepicker-zh-HK_73.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 88,  '_format' => 'js',  '_route' => '_assetic_659c308_88',);
                        }

                        // _assetic_659c308_89
                        if ($pathinfo === '/js/659c308_part_17_datepicker-zh-TW_74.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 89,  '_format' => 'js',  '_route' => '_assetic_659c308_89',);
                        }

                    }

                }

                // _assetic_659c308_90
                if ($pathinfo === '/js/659c308_timeout-dialog_18.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 90,  '_format' => 'js',  '_route' => '_assetic_659c308_90',);
                }

                // _assetic_659c308_91
                if ($pathinfo === '/js/659c308_dmuploader.min_19.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 91,  '_format' => 'js',  '_route' => '_assetic_659c308_91',);
                }

                // _assetic_659c308_92
                if ($pathinfo === '/js/659c308_jquery.creditCardValidator_20.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 92,  '_format' => 'js',  '_route' => '_assetic_659c308_92',);
                }

                // _assetic_659c308_93
                if ($pathinfo === '/js/659c308_pwstrength_21.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '659c308',  'pos' => 93,  '_format' => 'js',  '_route' => '_assetic_659c308_93',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/css/e79f93f')) {
            // _assetic_e79f93f
            if ($pathinfo === '/css/e79f93f.css') {
                return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_e79f93f',);
            }

            if (0 === strpos($pathinfo, '/css/e79f93f_')) {
                // _assetic_e79f93f_0
                if ($pathinfo === '/css/e79f93f_styles.min_1.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_e79f93f_0',);
                }

                // _assetic_e79f93f_1
                if ($pathinfo === '/css/e79f93f_css?family=Source+Sans+Pro:300,400,600_2.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_e79f93f_1',);
                }

                // _assetic_e79f93f_2
                if ($pathinfo === '/css/e79f93f_bootstrap-switch.min_3.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 2,  '_format' => 'css',  '_route' => '_assetic_e79f93f_2',);
                }

                // _assetic_e79f93f_3
                if ($pathinfo === '/css/e79f93f_font-awesome.min_4.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 3,  '_format' => 'css',  '_route' => '_assetic_e79f93f_3',);
                }

                if (0 === strpos($pathinfo, '/css/e79f93f_jquery')) {
                    // _assetic_e79f93f_4
                    if ($pathinfo === '/css/e79f93f_jquery.dataTables.min_5.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 4,  '_format' => 'css',  '_route' => '_assetic_e79f93f_4',);
                    }

                    // _assetic_e79f93f_5
                    if ($pathinfo === '/css/e79f93f_jquery-ui.min_6.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 5,  '_format' => 'css',  '_route' => '_assetic_e79f93f_5',);
                    }

                }

                // _assetic_e79f93f_6
                if ($pathinfo === '/css/e79f93f_bootstrap-tagsinput_7.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 6,  '_format' => 'css',  '_route' => '_assetic_e79f93f_6',);
                }

                // _assetic_e79f93f_7
                if ($pathinfo === '/css/e79f93f_timeout-dialog_8.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 7,  '_format' => 'css',  '_route' => '_assetic_e79f93f_7',);
                }

                // _assetic_e79f93f_8
                if ($pathinfo === '/css/e79f93f_overlay_9.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'e79f93f',  'pos' => 8,  '_format' => 'css',  '_route' => '_assetic_e79f93f_8',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/video')) {
            // mew_pipe_video_homepage_pager
            if (0 === strpos($pathinfo, '/video/page') && preg_match('#^/video/page(?:/(?P<page>\\d+)(?:/(?P<max>\\d+)(?:/(?P<sort>[^/]++)(?:/(?P<direction>asc|desc))?)?)?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mew_pipe_video_homepage_pager')), array (  '_controller' => 'MewPipe\\VideoBundle\\Controller\\DefaultController::indexAction',  'page' => 1,  'max' => 5,  'sort' => 'createdAt',  'direction' => 'desc',));
            }

            // mew_pipe_video_upload
            if ($pathinfo === '/video/upload') {
                return array (  '_controller' => 'MewPipe\\VideoBundle\\Controller\\DefaultController::UploadVideoAction',  '_route' => 'mew_pipe_video_upload',);
            }

        }

        // mew_pipe_user_homepage
        if (0 === strpos($pathinfo, '/user/hello') && preg_match('#^/user/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mew_pipe_user_homepage')), array (  '_controller' => 'MewPipe\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login_')) {
                // fp_openid_security_login
                if ($pathinfo === '/login_openid') {
                    return array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fp_openid_security_login',);
                }

                // fp_openid_security_check
                if ($pathinfo === '/login_check_openid') {
                    return array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fp_openid_security_check',);
                }

            }

            // fp_openid_security_logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'Fp\\OpenIdBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fp_openid_security_logout',);
            }

        }

        // mew_pipe_video_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mew_pipe_video_homepage');
            }

            return array (  '_controller' => 'MewPipe\\VideoBundle\\Controller\\DefaultController::indexAction',  'sort' => 'createdAt',  'direction' => 'desc',  '_route' => 'mew_pipe_video_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
