<?php
/**
 * 游戏初始化接口(特殊处理页面)
 */
class exportZIP
{
//    public static $DIR = '/tmp';
    public static $DIR = '/data1/www/dev-fb-vikingage.shinezone.com/www';

    public function initGameConfig()
    {
        $gameConfigs = array();

        $gameConfigs['lang']                    = $this->getGameConfigInfo('lang');

        //为了打sheet特殊处理的 2015-6-24 mm
        if(isset($_REQUEST['tdLang']) && $_REQUEST['tdLang']) {
            return $gameConfigs;
        } else {
            unset($gameConfigs['lang']);
        }

        $gameConfigs['achieve']                         = $this->getGameConfigInfo('achieves');
        $gameConfigs['buff']                            = $this->getGameConfigInfo('buff');
        $gameConfigs['effect']                          = $this->getGameConfigInfo('effect');
        $gameConfigs['heros']                           = $this->getGameConfigInfo('heros');
        $gameConfigs['heroSkills']                      = $this->getGameConfigInfo('heroSkills');
        $gameConfigs['magicSkill']                      = $this->getGameConfigInfo('magicSkills');
        $gameConfigs['items']                           = $this->getItemConfig();
        $gameConfigs['homeLevelUp']                     = $this->getGameConfigInfo('homeLevelUp');
        $gameConfigs['honor']                           = $this->getGameConfigInfo('honor');
        $gameConfigs['maps']                            = $this->getGameConfigInfo('maps');
        $gameConfigs['monsters']                        = $this->getGameConfigInfo('monsters');
        $gameConfigs['onlineReward']                    = $this->getGameConfigInfo('onlineReward');
        $gameConfigs['discountActivity']                = $this->getDiscountActivity();
        $gameConfigs['skills']                          = $this->getGameConfigInfo('skills');
        $gameConfigs['soldiers']                        = $this->getGameConfigInfo('soldiers');
        $gameConfigs['SoldiersArmed']                   = $this->getGameConfigInfo('SoldiersArmed');
        $gameConfigs['talks']                           = $this->getGameConfigInfo('talks');
        $gameConfigs['tasks']                           = $this->getGameConfigInfo('tasks');
        $gameConfigs['subTasks']                        = $this->getGameConfigInfo('subTasks');
        $gameConfigs['dailyTasks']                      = $this->getGameConfigInfo('dailyTasks');
        $gameConfigs['dailyTasksReward']                = $this->getGameConfigInfo('dailyTaskReward');
        $gameConfigs['titles']                          = $this->getGameConfigInfo('titles');
        $gameConfigs['tollgates']                       = $this->getGameConfigInfo('tollgates');
        $gameConfigs['tollLimit']                       = $this->getGameConfigInfo('tollLimit');
        $gameConfigs['towers']                          = $this->getGameConfigInfo('towers');
        $gameConfigs['trainModel']                      = $this->getGameConfigInfo('trainModel');
        $gameConfigs['trainTime']                       = $this->getGameConfigInfo('trainTime');
        $gameConfigs['unlock']                          = $this->getGameConfigInfo('unlock');
        $gameConfigs['wareHouse2']                      = $this->getGameConfigInfo('wareHouse2');
        $gameConfigs['weapon']                          = $this->getGameConfigInfo('weapon');
        $gameConfigs['groundEffect']                    = $this->getGameConfigInfo('groundEffect');
        $gameConfigs['NPCTalk']                         = $this->getGameConfigInfo('NPCTalk');
        $gameConfigs['NPC']                             = $this->getGameConfigInfo('NPC');
        $gameConfigs['heroStrengthenOdd']               = $this->getGameConfigInfo('heroStrengthenOdd');
        $gameConfigs['newbieGuide']                     = $this->getGameConfigInfo('newbieGuide');
        $gameConfigs['spiritInfo']                      = $this->getGameConfigInfo('spiritInfo');
        $gameConfigs['inviteFriendReward']              = $this->getGameConfigInfo('inviteFriendReward');
        $gameConfigs['inviteFriendRewardLevel']         = $this->getGameConfigInfo('inviteFriendRewardLevel');
        $gameConfigs['growthGift']                      = $this->getGameConfigInfo('growthGift');
        $gameConfigs['tavernItem']                      = $this->getGameConfigInfo('tavernItem');
        $gameConfigs['heroSkillLevelup']                = $this->getGameConfigInfo('heroSkillLevelup');
        $gameConfigs['hire']                            = $this->getGameConfigInfo('hire');
        $gameConfigs['rankGroup']                       = $this->getGameConfigInfo('rankGroup');
        $gameConfigs['wildMonster']                     = $this->getGameConfigInfo('wildMonster');
        $gameConfigs['barracks']                        = $this->getGameConfigInfo('barracks');
        $gameConfigs['robotUsers']                      = $this->getGameConfigInfo('robotUsers');
        $gameConfigs['collectTypeActivity']             = $this->getGameConfigInfo('collectTypeActivity');
        $gameConfigs['orders']                          = $this->getGameConfigInfo('orders');
        $gameConfigs['expedition']                      = $this->getGameConfigInfo('expedition');
        $gameConfigs['manor']                           = $this->getGameConfigInfo('manor');    //庄园配置
        $gameConfigs['talents']                         = $this->getGameConfigInfo('talents');//天赋配置
        $gameConfigs['equips']                          = $this->getGameConfigInfo('equips');
        $gameConfigs['equipUpgrade']                    = $this->getGameConfigInfo('equipUpgrade');
        $gameConfigs['discountItem']                    = $this->getGameConfigInfo('discountItem');
        $gameConfigs['feed']                            = $this->getGameConfigInfo('feed');
        $gameConfigs['pop']                             = $this->getGameConfigInfo('pop');
        $gameConfigs['lifeTree']                        = $this->getGameConfigInfo('lifeTree');
        $gameConfigs['buildings']                       = $this->getGameConfigInfo('buildings');
        $gameConfigs['homeLevelUpReward']               = $this->getGameConfigInfo('homeLevelUpReward');
        $gameConfigs['onlineGiftBag']                   = $this->getGameConfigInfo('onlineGiftBag');
        $gameConfigs['onlineGiftBag']                   = $this->getGameConfigInfo('onlineGiftBag');
        $gameConfigs['day7Task']                        = $this->getGameConfigInfo('day7');
        $gameConfigs['heroLevelUp']                     = $this->getGameConfigInfo('heroLevelUp');
        $gameConfigs['furnaceItem']                     = $this->getGameConfigInfo('furnaceItem');
        $gameConfigs['lootReward']                      = $this->getGameConfigInfo('lootReward');
        $gameConfigs['worldBoss']                       = $this->getGameConfigInfo('worldBoss');
        $gameConfigs['worldBossReward']                 = $this->getGameConfigInfo('worldBossReward');
        $gameConfigs['PVPReward']                       = $this->getGameConfigInfo('PVPReward');//竞技场奖励
        $gameConfigs['dropInfo']                        = $this->formatDropInfo();
        $gameConfigs['vip']                             = $this->getGameConfigInfo('vip');
        $gameConfigs['vipFeatures']                     = $this->getGameConfigInfo('vipFeatures');
        $gameConfigs['technology']                      = $this->getGameConfigInfo('technology');
        $gameConfigs['competitionProgress']             = $this->getGameConfigInfo('competitionProgress');
        $gameConfigs['competitionRewards']              = $this->getGameConfigInfo('competitionRewards');
        $gameConfigs['towerTalent']                     = $this->getGameConfigInfo('towerTalent');
        $gameConfigs['soldierSkills']                   = $this->getGameConfigInfo('soldierSkills');
        $gameConfigs['forceTaxReward']                  = $this->getGameConfigInfo('forceTaxReward');
        $gameConfigs['activityTime']                    = $this->getGameConfigInfo('activityTime');
        $gameConfigs['digTreasure']                     = $this->getGameConfigInfo('digTreasure');
        $gameConfigs['digTreasureShovelSell']           = $this->getGameConfigInfo('digTreasureShovelSell');
        $gameConfigs['dock']                            = $this->getGameConfigInfo('dock');
        $gameConfigs['dockTech']                        = $this->getGameConfigInfo('dockTech');
        $gameConfigs['seaArea']                         = $this->getGameConfigInfo('seaArea');
        $gameConfigs['seaIslands']                      = $this->getGameConfigInfo('seaIslands');
        $gameConfigs['exploreIsland']                   = $this->getGameConfigInfo('exploreIsland');
        $gameConfigs['exploreEvents']                   = $this->getGameConfigInfo('exploreEvents');
        $gameConfigs['goddessBlessing']                 = $this->getGameConfigInfo('goddessBlessing');
        $gameConfigs['goddessBlessingReward']           = $this->getGameConfigInfo('goddessBlessingReward');
        $gameConfigs['halloweenCharge']                 = $this->getGameConfigInfo('halloweenCharge');
        $gameConfigs['thankGivingBigSale']              = $this->getGameConfigInfo('thankGivingBigSale');
        $gameConfigs['revengeKillRewards']              = $this->getGameConfigInfo('revengeKillRewards');
        $gameConfigs['revengeRankRewards']              = $this->getGameConfigInfo('revengeRankRewards');
        $gameConfigs['thankGivingBigSale']              = $this->getGameConfigInfo('thankGivingBigSale');
        $gameConfigs['soldiersRecallSignReward']        = $this->getGameConfigInfo('soldiersRecallSignReward');
        $gameConfigs['soldiersRecallSignDiscount']      = $this->getGameConfigInfo('soldiersRecallSignDiscount');
        $gameConfigs['silverReward']                    = $this->getGameConfigInfo('silverBallSlot');
        $gameConfigs['goldReward']                      = $this->getGameConfigInfo('goldBallSlot');
        $gameConfigs['materialExchange']                = $this->getGameConfigInfo('materialExchange');
        $gameConfigs['equipmentExchange']               = $this->getGameConfigInfo('equipmentExchange');
        $gameConfigs['coinPromotion']                   = $this->getGameConfigInfo('coinPromotion');
        $gameConfigs['christmasToll']                   = $this->getGameConfigInfo('christmasToll');
        $gameConfigs['letterReward']                    = $this->getGameConfigInfo('letterReward');
        $gameConfigs['letterDrop']                      = $this->getGameConfigInfo('letterDrop');
        $gameConfigs['christmasPayReward']              = $this->getGameConfigInfo('christmasPayReward');
        $gameConfigs['lotteryReward']                   = $this->getGameConfigInfo('christmasPartyLottery');
        $gameConfigs['hatExchange']                     = $this->getGameConfigInfo('chrisHatExchange');
        $gameConfigs['christmasIndividual']             = $this->getGameConfigInfo('christmasIndividual');
        $gameConfigs['eggCrashRound']                   = $this->getGameConfigInfo('eggCrashRound');
        $gameConfigs['scopeReward']                     = $this->getGameConfigInfo('scopeReward');
        $gameConfigs['globalReward']                    = $this->getGameConfigInfo('globalReward');
        $gameConfigs['darknessDeal']                    = $this->getGameConfigInfo('darknessDeal');
        $gameConfigs['favorReward']                     = $this->getGameConfigInfo('favorReward');
        $gameConfigs['fashion']                         = $this->getGameConfigInfo('fashion');
        $gameConfigs['rechargeSign']                    = $this->getGameConfigInfo('rechargeSign');
        $gameConfigs['dailyLoginReward']                = $this->getGameConfigInfo('dailyLoginReward');
        $gameConfigs['eggCrashPromotion']               = $this->getGameConfigInfo('eggCrashPromotion');
        $gameConfigs['totalConsumption']                = $this->getGameConfigInfo('totalConsumption');
        $gameConfigs['magicTalent']                     = $this->getGameConfigInfo('magicTalent');
        $gameConfigs['magicCard']                       = $this->getGameConfigInfo('magicCard');
        $gameConfigs['magicCardPromotion']              = $this->getGameConfigInfo('magicCardPromotion');
        $gameConfigs['noticeItems']                     = $this->getGameConfigInfo('noticeItems');
        $gameConfigs['clownSignIn']                     = $this->getGameConfigInfo('clownSignIn');
        $gameConfigs['angerExchange']                   = $this->getGameConfigInfo('angerExchange');
        $gameConfigs['angerReward']                     = $this->getGameConfigInfo('angerReward');
        $gameConfigs['recallReward']                    = $this->getGameConfigInfo('recallReward');
        $gameConfigs['travelShop']                      = $this->getGameConfigInfo('travelShop');
        $gameConfigs['knightJourneyRound']              = $this->getGameConfigInfo('knightJourneyRound');
        $gameConfigs['knightJourneyScope']              = $this->getGameConfigInfo('knightJourneyScope');
        $gameConfigs['knightJourneyGlobal']             = $this->getGameConfigInfo('knightJourneyGlobal');
        $gameConfigs['knightJourneyResource']           = $this->getGameConfigInfo('knightJourneyResource');
        $gameConfigs['dicePromotion']                   = $this->getGameConfigInfo('dicePromotion');
        $gameConfigs['shardPromotion']                  = $this->getGameConfigInfo('shardPromotion');
        $gameConfigs['goddessPromotion']                = $this->getGameConfigInfo('goddessPromotion');
        $gameConfigs['materialDiscount']                = $this->getGameConfigInfo('materialDiscount');
        $gameConfigs['ns']                              = $this->getGameConfigInfo('goddessBlessing');
        $gameConfigs['nsReward']                        = $this->getGameConfigInfo('goddessBlessingReward');
        $gameConfigs['camping']                         = $this->getGameConfigInfo('camping');
        $gameConfigs['seekTreasures']                   = $this->getGameConfigInfo('seekTreasures');
        $gameConfigs['seekEvent']                       = $this->getGameConfigInfo('seekEvent');
        $gameConfigs['knightJourneyRandReward']         = $this->getGameConfigInfo('knightJourneyRandReward');
        $gameConfigs['factionBattle']                   = $this->getGameConfigInfo('factionBattle');
        $gameConfigs['factionEncourage']                = $this->getGameConfigInfo('factionEncourage');
        $gameConfigs['factionReward']                   = $this->getGameConfigInfo('factionReward');
        $gameConfigs['heroGems']                        = $this->getGameConfigInfo('heroGems');
        $gameConfigs['heroStele']                       = $this->getGameConfigInfo('heroStele');
        $gameConfigs['bistroItem']                      = $this->getGameConfigInfo('bistroItem');
        $gameConfigs['heroStrengthenConsume']           = $this->getGameConfigInfo('heroStrengthenConsume');
        $gameConfigs['intoGameReward']                  = $this->getGameConfigInfo('intoGameReward');
        $gameConfigs['giftBagReward']                   = $this->getGameConfigInfo('giftBagReward');
        $gameConfigs['harbour']                         = $this->getGameConfigInfo('harbour');
        $gameConfigs['hideout']                         = $this->getGameConfigInfo('hideout');
        $gameConfigs['herrCountry']                     = $this->getGameConfigInfo('herrCountry');
        $gameConfigs['secretShop']                      = $this->getGameConfigInfo('secretShop');
        $gameConfigs['flushShip']                       = $this->getGameConfigInfo('flushShip');
        $gameConfigs['heroGemsPrice']                   = $this->getGameConfigInfo('heroGemsPrice');
        $gameConfigs['exploreConfig']                   = $this->getGameConfigInfo('exploreConfig');
        $gameConfigs['heroTalentLevelup']               = $this->getGameConfigInfo('heroTalentLevelup');
        $gameConfigs['payReward']                       = $this->getGameConfigInfo('payReward');
        $gameConfigs['heroAura']                        = $this->getGameConfigInfo('heroAura');
        $gameConfigs['resourceWell']                    = $this->getGameConfigInfo('resourceWell');
        $gameConfigs['flushConsume']                    = $this->getGameConfigInfo('flushConsume');
        $gameConfigs['pvpSkills']                       = $this->getGameConfigInfo('pvpSkills');
        $gameConfigs['beerFeast']                       = $this->getGameConfigInfo('beerFeast');
        $gameConfigs['beerLottery']                     = $this->getGameConfigInfo('beerLottery');
        $gameConfigs['openServerPayReturn']             = $this->getGameConfigInfo('openServerPayReturn');
        $gameConfigs['lucyPvPReward']                   = $this->getGameConfigInfo('lucyPvPReward');
        $gameConfigs['freeTaxCostItem']                 = $this->getGameConfigInfo('freeTaxCostItem');
        $gameConfigs['attributeIcon']                   = $this->getGameConfigInfo('attributeIcon');
        $gameConfigs['attributeIcon']                   = $this->getGameConfigInfo('attributeIcon');
        $gameConfigs['cell4PlantLand']                  = $this->getGameConfigInfo('cell4PlantLand');
        $gameConfigs['cell4PlantExchangeReward']        = $this->getGameConfigInfo('cell4PlantExchangeReward');
        $gameConfigs['equipAdvance']                    = $this->getGameConfigInfo('equipAdvance');
        $gameConfigs['vaBoss']                          = $this->getGameConfigInfo('vaBoss');
        $gameConfigs['vaBossShop']                      = $this->getGameConfigInfo('vaBossShop');
        $gameConfigs['vaBossRankReward']                = $this->getGameConfigInfo('vaBossRankReward');
        $gameConfigs['vaBossInspire']                   = $this->getGameConfigInfo('vaBossInspire');
        $gameConfigs['vaBossBuyAtkTime']                = $this->getGameConfigInfo('vaBossBuyAtkTime');
        $gameConfigs['inviteActivity']                  = $this->getGameConfigInfo('inviteActivity');
        $gameConfigs['ornament']                        = $this->getGameConfigInfo('ornament');
        $gameConfigs['rouletteLotteryPool']             = $this->getGameConfigInfo('rouletteLotteryPool');
        $gameConfigs['rouletteLotteryCoinLimit']        = $this->getGameConfigInfo('rouletteLotteryCoinLimit');
        $gameConfigs['rouletteLotteryGlobalReward']     = $this->getGameConfigInfo('rouletteLotteryGlobalReward');
        $gameConfigs['vaPlot']                          = $this->getGameConfigInfo('vaPlot');
        $gameConfigs['costLotteryReward']               = $this->getGameConfigInfo('costLotteryReward');
        $gameConfigs['timeLimitReward']                 = $this->getGameConfigInfo('timeLimitReward');
        $gameConfigs['unionContributeConfig']           = $this->getGameConfigInfo('unionContributeConfig');
        $gameConfigs['unionMergerGroup']                = $this->getGameConfigInfo('unionMergerGroup');
        $gameConfigs['unionRoleConfig']                 = $this->getGameConfigInfo('unionRoleConfig');
        $gameConfigs['unionRoleFeatures']               = $this->getGameConfigInfo('unionRoleFeatures');
        $gameConfigs['unionShop']                       = $this->getGameConfigInfo('unionShop');
        $gameConfigs['unionTechLevelUp']                = $this->getGameConfigInfo('unionTechLevelUp');
        $gameConfigs['fashion']                         = $this->getGameConfigInfo('fashion');
        $gameConfigs['fashionSuit']                     = $this->getGameConfigInfo('fashionSuit');
        $gameConfigs['fashionUpgrade']                  = $this->getGameConfigInfo('fashionUpgrade');
        $gameConfigs['deepCatchPool']                   = $this->getGameConfigInfo('deepCatchPool');
        $gameConfigs['deepCatchTreasureBox']            = $this->getGameConfigInfo('deepCatchTreasureBox');
        $gameConfigs['chargeTargetGrades']              = $this->getGameConfigInfo('chargeTargetGrades');
        $gameConfigs['seaFood']                         = $this->getGameConfigInfo('seaFood');
        $gameConfigs['hideTollgates']                   = $this->getGameConfigInfo('hideTollgates');
        $gameConfigs['oreInfo']                         = $this->getGameConfigInfo('oreInfo');
        $gameConfigs['oreProduction']                   = $this->getGameConfigInfo('oreProduction');
        $gameConfigs['oreAddTime']                      = $this->getGameConfigInfo('oreAddTime');
        //无极幻境
        $gameConfigs['fantasyLevelArea']                = $this->getGameConfigInfo('fantasyLevelArea');
        $gameConfigs['fantasyCycle']                    = $this->getGameConfigInfo('fantasyCycle');
        $gameConfigs['fantasyMap']                      = $this->getGameConfigInfo('fantasyMap');
        $gameConfigs['fantasyBoss']                     = $this->getGameConfigInfo('fantasyBoss');
        $gameConfigs['fantasyBossPrice']                = $this->getGameConfigInfo('fantasyBossPrice');
        $gameConfigs['fantasyScore']                    = $this->getGameConfigInfo('fantasyScore');
        $gameConfigs['fantasyScoreRectify']             = $this->getGameConfigInfo('fantasyScoreRectify');
        $gameConfigs['fantasyOneWaveReward']            = $this->getGameConfigInfo('fantasyOneWaveReward');
        $gameConfigs['fantasyWaveReward']               = $this->getGameConfigInfo('fantasyWaveReward');
        $gameConfigs['fantasyRankReward']               = $this->getGameConfigInfo('fantasyRankReward');
        $gameConfigs['fantasyTimes']                    = $this->getGameConfigInfo('fantasyTimes');
        $gameConfigs['fantasyBuff']                     = $this->getGameConfigInfo('fantasyBuff');
        //开箱排行
        $gameConfigs['shredDropOdd']                    = $this->getGameConfigInfo('shredDropOdd');
        $gameConfigs['boxRankRound']                    = $this->getGameConfigInfo('boxRankRound');
        $gameConfigs['boxRankRewards']                  = $this->getGameConfigInfo('boxRankRewards');
        $gameConfigs['boxRewards']                      = $this->getGameConfigInfo('boxRewards');
        //荣誉商城道具
        $gameConfigs['vipItems']                        = $this->getGameConfigInfo('vipItems');
        //深海探险
        $gameConfigs['exploreMap']                      = $this->getGameConfigInfo('exploreMap');
        $gameConfigs['exploreSetting']                  = $this->getGameConfigInfo('exploreSetting');
        //海盗船排行榜
        $gameConfigs['scoreStore']                      = $this->getGameConfigInfo('scoreStore');
        $gameConfigs['pirateShipLevel']                 = $this->getGameConfigInfo('pirateShipLevel');
        $gameConfigs['pirateShipRank']                  = $this->getGameConfigInfo('pirateShipRank');
        $gameConfigs['pirateReward']                    = $this->getGameConfigInfo('pirateReward');
        $gameConfigs['pirateCoin']                      = $this->getGameConfigInfo('pirateCoin');
        //字谜拼字活动
        $gameConfigs['charade']                         = $this->getGameConfigInfo('charade');
        $gameConfigs['charadeDrop']                     = $this->getGameConfigInfo('charadeDrop');
        //2016-7优化
        $gameConfigs['harbourFactor']                   = $this->getGameConfigInfo('harbourFactor');
        $gameConfigs['forceTaxFactor']                  = $this->getGameConfigInfo('forceTaxFactor');
        $gameConfigs['forceTaxMoneyFactor']             = $this->getGameConfigInfo('forceTaxMoneyFactor');
        //一元购
        $gameConfigs['oneDollarPool']                   = $this->getGameConfigInfo('oneDollarPool');
        $gameConfigs['oneDollarSetting']                = $this->getGameConfigInfo('oneDollarSetting');
        $gameConfigs['oneDollarPacket']                 = $this->getGameConfigInfo('oneDollarPacket');
        //新综合充值3
        $gameConfigs['newRechargeList31']               = $this->getGameConfigInfo('newRechargeList31');
        $gameConfigs['newRechargeList32']               = $this->getGameConfigInfo('newRechargeList32');
        //新综合充值4-大额投资
        $gameConfigs['investType']                      = $this->getGameConfigInfo('investType');
        $gameConfigs['investReward']                    = $this->getGameConfigInfo('investReward');
        //夜煞
        $gameConfigs['nightFury']                       = $this->getGameConfigInfo('nightFury');
        //塔罗牌
        $gameConfigs['tarotPool']                       = $this->getGameConfigInfo('tarotPool');
        $gameConfigs['tarotCard']                       = $this->getGameConfigInfo('tarotCard');
        $gameConfigs['tarotFlash']                      = $this->getGameConfigInfo('tarotFlash');

        return $gameConfigs;
    }

    public function getConfigurationConfig() {
        return array(
            /**特殊处理文件*/
            'filterFolder' => array(
                'competitionProgress',
                'worldBoss',
                'gameSetconfig',
                'orders',
                'unlock',
            ),
            /**多语言文件*/
            'multiLanguage' => array(
                'webLang',
                'lang',
                'feed',
            ),
        );
    }

    /**
     * 获得系统物品数据
     * @param String $key
     *
     * @return array
     */
    public function getItemConfig($key = null)
    {
        $ret = null;
        $lang = 'en_us';

        $ret = $this->get('items', 'items/' . $lang . '.php', 'commonConfig');
        if ($ret && isset($ret['itemkeys'])) {
            unset($ret['itemkeys']);
        }

        return $key != null ? $ret[$key] : $ret;
    }

    /**
     * 得到游戏内基础配置信息统一接口（方便加cache缓存）
     * @param string $dirname
     * @return null
     * @throws J7Exception
     */
    public function getGameConfigInfo($dirname = 'level_up')
    {
        //调用配置文件文件
        $configurationConfig = $this->getConfigurationConfig();
        $multiLanguage = $configurationConfig['multiLanguage'];
        $filterFolder = $configurationConfig['filterFolder'];

        //调用语言
        $lang = 'en_us';

        //特殊处理多语言版本
        if(in_array($dirname, $multiLanguage)) {
            if(isset($_REQUEST['tdLang']) && $_REQUEST['tdLang']) {
                $lang = trim($_REQUEST['tdLang']);
            }
        }

        //特殊处理配置文件加载目录
        $configPath = '';
        if(!in_array($dirname, $filterFolder)) {
            $configPath = 'commonConfig';
        }

        $retArr = $this->get($dirname, $dirname . '/' . $lang . '.php', $configPath);
        if (!$retArr) {
            throw new Exception("config error({$configPath})---->" . $dirname . '/' . $lang . '.php');
        }

        if (isset($retArr['itemkeys'])) {
            unset($retArr['itemkeys']);
        }
        return $retArr;
    }

    private static $_config = null;

    public function get($index, $config_file = null, $platform = null)
    {
        self::_loadConfigFile($config_file, $platform);

        if (isset(self::$_config[$index])) {
            return self::$_config[$index];
        } else {
            return null;
        }
    }

    private static function  _loadConfigFile($config_file = null, $platform = null)
    {
        //新加判断区分版本 2015-6-24 mm
        if(empty($platform)) {
            $platform = 'facebook';
        }

        $_configpath = __DIR__ . "/../../configs/";
        $filename = $_configpath . $platform . '/' . $config_file;

        $config_file = $filename;

//        echo $config_file . PHP_EOL;DIE;

        if (file_exists($config_file)) {
            require($config_file);
        } else {
            throw new Exception('Could not load the config file: ---->' . $config_file . '.');
        }

        if (is_array(self::$_config)) {
            self::$_config = array_merge(self::$_config, $J7CONFIG);
        } else {
            self::$_config = $J7CONFIG;
        }

        return self::$_config;
    }

    /**
     * 组织掉落信息
     *
     * @return array
     */
    public function formatDropInfo()
    {
        $dropInfoArr = $this->getGameConfigInfo('dropInfo');
        if (!$dropInfoArr) {
            return array();
        }

        $dropInfoTemp = array();
        foreach ($dropInfoArr as $dropId => $dropInfo) {
            $probabilityStrTemp = '';
            for ($i = 1; $i <= count($dropInfo) - 2; $i++) {
                $itemKeyStr = 'dropItem' . $i;
                $probabilityStr = 'probability' . $i;
                if (isset($dropInfo[$itemKeyStr]) && $dropInfo[$itemKeyStr]) {
                    if ($probabilityStrTemp) {
                        $probabilityStrTemp .= ';' . $dropInfo[$itemKeyStr] . ':' . $dropInfo[$probabilityStr];
                    } else {
                        $probabilityStrTemp = $dropInfo[$itemKeyStr] . ':' . $dropInfo[$probabilityStr];
                    }
                } else {
                    break;
                }
            }
            $dropInfoTemp[$dropId]['configId'] = $dropId;
            $dropInfoTemp[$dropId]['type'] = $dropInfo['type'];
            $dropInfoTemp[$dropId]['value'] = $probabilityStrTemp;
        }
        unset($dropInfo);

        return $dropInfoTemp;
    }

    /**
     * 获取打折活动配置信息
     */
    public function getDiscountActivity()
    {
        $discountActivity = $this->getGameConfigInfo('discountActivity');
        $discountActivityNew = array();
        foreach ($discountActivity as $itemInfo) {
            $discountActivityNew[] = $itemInfo;
        }
        $discountActivity = null;

        return $discountActivityNew;
    }

    /**
     * 通过网页来执行
     */
    public function execute()
    {
        set_time_limit(0);
        $this->removeDirFiles();
        $gameConfigs = $this->initGameConfig();
        $this->convertSystemInfo($gameConfigs);

//        ob_start();
//        $filename = self::$DIR . '/config.zip';

//        header("Content-type: application/zip");
//        header("Accept-Ranges: bytes");
//        header("Content-length: " . filesize($filename));
//        header("Content-Disposition: attachment; filename=configFile.zip");
//        readfile($filename);

        exit;
    }

    public function convertSystemInfo($gameConfigs)
    {
        foreach($gameConfigs as $tableKey => $tableInfo)
        {
            if (!in_array($tableKey, array('gameSetting','levelUp'))
            ) {
                $newTableInfo = array();
                $headLine = array();
                foreach($tableInfo as $lineInfo)
                {
                    $headLine = array_keys($lineInfo);
                    break;
                }
                $newTableInfo[] = $headLine;
                foreach($tableInfo as $lineInfo)
                {
                    $newTableInfo[] = array_values($lineInfo);
                }
                $this->putItInfoCsv($tableKey . '.csv', $newTableInfo);
                unset($newTableInfo);
            }
        }
        unset($gameConfigs);
    }

    public function removeDirFiles()
    {
        $dir = self::$DIR . "/config/";
        if ($handle = opendir($dir))
        {
            while (false !== ($file = readdir($handle)))
            {
                if ($file != "." && $file != "..")
                {
                    unlink($dir . $file);
                }
            }
            closedir($handle);
        }
    }

    /**
     * 把数组转成文件
     *
     * @param $filename
     * @param $param
     */
    public function putItInfoCsv($filename, $param)
    {
        $filename = self::$DIR . "/config/" . $filename;

        if (!file_exists($filename)) {
            if (file_exists($filename)) {
                unlink($filename);
            }
            $fp = fopen($filename, 'w');
            //转换成相应的编码，此处为UTF8
            fprintf($fp, chr(0xEF).chr(0xBB).chr(0xBF));
            foreach ($param as $value) {
                fputcsv($fp, $value);
            }
            fclose($fp);

            $fileStr    = file_get_contents($filename);

            $fileStr = preg_replace("/[\n]/", "\r\n", $fileStr);
            $fileStr = preg_replace("/[\r\n]$/", "", $fileStr);

            file_put_contents($filename, $fileStr);
            self::zip(self::$DIR . "/config", self::$DIR . "/config.zip");
        }
    }

    /**
     * @desc  生成zip压缩文件的函数
     *
     * @param $dir          string 需要压缩的文件夹名
     * @param $filename     string 压缩后的zip文件名  包括zip后缀
     * @param $missfile     array   不需要的文件
     * @param $fromString   array   自定义压缩文件
     *
     * 使用举例zip("../pubupload/coupon/coucopy","../pubupload/coupon/coucopy.zip");
     */
    public static function zip($dir, $filename,$missfile=array(),$addfromString=array())
    {
        if(!file_exists($dir) || !is_dir($dir)){
            die(' can not exists dir '.$dir);
        }
        if(strtolower(array_pop(explode('.', $filename))) != 'zip') {
            die('only Support zip files');
        }

        $dir        = str_replace('\\','/',$dir);
        $filename   = str_replace('\\','/',$filename);

        if(file_exists($filename)){
            unlink($filename);
        }
        $files = array();
        self::getfiles($dir, $files);
        if(empty($files)){
            die('the dir is empty');
        }
        $zip = new ZipArchive;
        $res = $zip->open($filename, ZipArchive::CREATE);
        if ($res === true) {
            foreach($files as $v){
                if(!in_array(str_replace($dir.'/','',$v),$missfile)){
                    $zip->addFile($v,str_replace($dir.'/','',$v));
                }
            }
            if(!empty($addfromString)){
                foreach($addfromString as $v){
                    $zip->addFromString($v[0],$v[1]);
                }
            }
            $zip->close();
            //echo 'ok';
        } else {
            //echo 'failed';
        }
    }

    public static function getfiles($dir,&$files=array())
    {
        if (!file_exists($dir) || !is_dir($dir)) {
            return false;
        }

        if (substr($dir,-1)=='/') {
            $dir = substr($dir,0,strlen($dir)-1);
        }
        $_files = scandir($dir);
        foreach($_files as $v){
            if($v != '.' && $v!='..'){
                if(is_dir($dir.'/'.$v)){
                    self::getfiles($dir.'/'.$v,$files);
                }
                else
                {
                    $files[] = $dir.'/'.$v;
                }
            }
        }
        return $files;
    }
}

//传入语言
if(count($argv) > 1) {
    $_REQUEST['tdLang'] = $argv[1];
}

//run
$classGameInit = new exportZIP();
$classGameInit->execute();