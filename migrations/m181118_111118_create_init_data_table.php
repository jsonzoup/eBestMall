<?php

use yii\db\Migration;

/**
 * Handles the creation of table `init_data`.
 */
class m181118_111118_create_init_data_table extends Migration
{
    /**
     * @inheritdoc
     */
    public function up()
    {
        // 用户数据
        $this->batchInsert('{{%user}}', [
            'username',
            'auth_key',
            'password_hash',
            'email',
            'mobile_phone',
            'payment_password',
            'avatar',
            'nickname',
            'status',
            'created_at',
            'updated_at',
        ], [
            [
                '星辰墨柒',
                'M_q52djQivtmcCrRROBggf1w_qtIhRLV',
                '$2y$13$zUrBLTsr1WtbeXRp4GT1DecAtxma90OkT0VtWpHby8QXObLs78/P.',
                'hongyukeji@126.com',
                '13952101395',
                md5('123456'),
                '/static/img/public/user/user_default_avatar.jpg',
                '星辰墨柒',
                '10',
                time(),
                time(),
            ],
        ]);

        // 分类数据
        $this->batchInsert('{{%goods_category}}', [
            'cate_id',
            'cate_name',
            'parent_id',
            'cate_keywords',
            'cate_desc',
            'is_best',
            'is_show_nav',
            'is_show',
            'sort_order',
            'status',
        ], [
            ['', '家用电器', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '手机 / 运营商 / 数码', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '电脑 / 办公', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '家居 / 家具 / 家装 / 厨具', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '男装 / 女装 / 童衣 / 内衣', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '美妆个护 / 宠物', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '女鞋 / 箱包 / 钟表 / 珠宝', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '男鞋 / 运动 / 户外', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '汽车 / 汽车用品', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '母婴 / 玩具乐器', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '食品 / 酒类 / 生鲜 / 特产', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '礼品鲜花 / 农资绿植', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '医药保健 / 计生情趣', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '图书 / 音像 / 电子书', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '机票 / 酒店 / 旅游 / 生活', '0', '', '', '0', '0', '1', '300', '1',],
            ['', '理财 / 众筹 / 白条 / 保险', '0', '', '', '0', '0', '1', '300', '1',],

            // 分类-01
            ['', '电视', '1', '', '', '0', '0', '1', '300', '1',],
            ['', '空调', '1', '', '', '0', '0', '1', '290', '1',],
            ['', '洗衣机', '1', '', '', '0', '0', '1', '280', '1',],
            ['', '冰箱', '1', '', '', '0', '0', '1', '270', '1',],
            ['', '厨卫大电', '1', '', '', '0', '0', '1', '260', '1',],
            ['', '厨卫小电', '1', '', '', '0', '0', '1', '250', '1',],
            ['', '生活电器', '1', '', '', '0', '0', '1', '240', '1',],
            ['', '个护健康', '1', '', '', '0', '0', '1', '230', '1',],
            ['', '家庭影音', '1', '', '', '0', '0', '1', '220', '1',],
            ['', '进口电器', '1', '', '', '0', '0', '1', '210', '1',],

            // 分类-02
            ['', '手机通讯', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '运营商', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '手机配件', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '摄影摄像', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '数码配件', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '影音娱乐', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '智能设备', '2', '', '', '0', '0', '1', '100', '1',],
            ['', '电子教育', '2', '', '', '0', '0', '1', '100', '1',],

            // 分类-03
            ['', '电脑整机', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '电脑配件', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '外设产品', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '游戏设备', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '网络产品', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '办公设备', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '文具耗材', '3', '', '', '0', '0', '1', '100', '1',],
            ['', '服务产品', '3', '', '', '0', '0', '1', '100', '1',],

            // 分类-04
            ['', '厨具', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '家纺', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '生活日用', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '家装软饰', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '灯具', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '家具', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '家装主材', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '厨房卫浴', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '五金电工', '4', '', '', '0', '0', '1', '100', '1',],
            ['', '装修定制', '4', '', '', '0', '0', '1', '100', '1',],

            // 分类-05
            ['', '女装', '5', '', '', '0', '0', '1', '100', '1',],
            ['', '男装', '5', '', '', '0', '0', '1', '100', '1',],
            ['', '内衣', '5', '', '', '0', '0', '1', '100', '1',],
            ['', '配饰', '5', '', '', '0', '0', '1', '100', '1',],
            ['', '童装', '5', '', '', '0', '0', '1', '100', '1',],
            ['', '童鞋', '5', '', '', '0', '0', '1', '100', '1',],

            // 分类-06
            ['', '面部护肤', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '洗发护发', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '身体护理', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '口腔护理', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '女性护理', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '香水彩妆', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '清洁用品', '6', '', '', '0', '0', '1', '100', '1',],
            ['', '宠物生活', '6', '', '', '0', '0', '1', '100', '1',],

            // 分类-07
            ['', '时尚女鞋', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '潮流女包', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '精品男包', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '功能箱包', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '奢侈品', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '精选大牌', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '钟表', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '珠宝首饰', '7', '', '', '0', '0', '1', '100', '1',],
            ['', '金银投资', '7', '', '', '0', '0', '1', '100', '1',],

            // 分类-08
            ['', '流行男鞋', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '运动鞋包', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '运动服饰', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '健身训练', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '骑行运动', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '体育用品', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '户外鞋服', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '户外装备', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '垂钓用品', '8', '', '', '0', '0', '1', '100', '1',],
            ['', '游泳用品', '8', '', '', '0', '0', '1', '100', '1',],

            // 分类-09
            ['', '汽车车型', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '汽车价格', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '汽车品牌', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '维修保养', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '汽车装饰', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '车载电器', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '美容清洗', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '安全自驾', '9', '', '', '0', '0', '1', '100', '1',],
            ['', '汽车服务', '9', '', '', '0', '0', '1', '100', '1',],

            // 分类-10
            ['', '奶粉', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '营养辅食', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '尿裤湿巾', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '喂养用品', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '洗护用品', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '寝居服饰', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '妈妈专区', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '童车童床', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '玩具', '10', '', '', '0', '0', '1', '100', '1',],
            ['', '乐器', '10', '', '', '0', '0', '1', '100', '1',],

            // 分类-11
            ['', '新鲜水果', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '蔬菜蛋品', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '精选肉类', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '海鲜水产', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '冷饮冻食', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '中外名酒', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '进口食品', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '休闲食品', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '地方特产', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '茗茶', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '饮料冲调', '11', '', '', '0', '0', '1', '100', '1',],
            ['', '粮油调味', '11', '', '', '0', '0', '1', '100', '1',],

            // 分类-12
            ['', '火机烟具', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '礼品', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '鲜花速递', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '绿植园艺', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '种子', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '农药', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '肥料', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '畜牧养殖', '12', '', '', '0', '0', '1', '100', '1',],
            ['', '农机农具', '12', '', '', '0', '0', '1', '100', '1',],

            // 分类-13
            ['', '中西药品', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '营养健康', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '营养成分', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '滋补养生', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '计生情趣', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '保健器械', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '护理护具', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '隐形眼镜', '13', '', '', '0', '0', '1', '100', '1',],
            ['', '健康服务', '13', '', '', '0', '0', '1', '100', '1',],

            // 分类-14
            ['', '邮币', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '少儿', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '教育', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '文艺', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '经管励志', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '人文社科', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '生活', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '科技', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '刊/原版', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '电子书', '14', '', '', '0', '0', '1', '100', '1',],
            ['', '音像', '14', '', '', '0', '0', '1', '100', '1',],

            // 分类-15
            ['', '交通出行', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '酒店预订', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '旅游度假', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '商旅服务', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '演出票务', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '生活缴费', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '生活服务', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '教育培训', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '彩票', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '游戏', '15', '', '', '0', '0', '1', '100', '1',],
            ['', '海外生活', '15', '', '', '0', '0', '1', '100', '1',],

            // 分类-16
            ['', '理财', '16', '', '', '0', '0', '1', '100', '1',],
            ['', '众筹', '16', '', '', '0', '0', '1', '100', '1',],
            ['', '东家', '16', '', '', '0', '0', '1', '100', '1',],
            ['', '白条', '16', '', '', '0', '0', '1', '100', '1',],
            ['', '支付', '16', '', '', '0', '0', '1', '100', '1',],
            ['', '保险', '16', '', '', '0', '0', '1', '100', '1',],

            ['', '手机', '27', '', '', '0', '0', '1', '100', '1',],

        ]);

        // 店铺表
        $this->batchInsert('{{%store}}', [
            'store_id',
            'user_id',
            'store_name',
            'sort_order',
            'is_self',
            'status',
            'created_at',
            'updated_at',
        ], [
            ['', '1', '平台自营', '100', '1', '1', time(), time(),],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function down()
    {
        //
    }
}
