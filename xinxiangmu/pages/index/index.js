var app = getApp()  
Page({  
  data: {  
    //   imgUrls: [  
    //    {  
    //       link:'/pages/index/index',  
    //       url:'../../images/banner1.jpg'   
    //    },{  
    //       link:'/pages/index/index',  
    //       url:'../../images/banner2.jpg'   
    //    },{  
    //       link:'/pages/index/index',  
    //       url:'../../images/banner3.jpg'   
    //    }   
    // ],
    // navs: [{icon: "../../images/nav01.png",       name: "大聚惠"},
    //        {icon: "../../images/nav02.png", name: "海外购"},
    //        {icon: "../../images/nav03.png",  name: "超市百货"},
    //        {icon: "../../images/nav04.png",     name: "厂家直销"},
    //        {icon: "../../images/nav05.png",     name: "美食娱乐"}],
    // kehu: [{icon: "../../images/scyh0.jpg",       name: "海绵包包"},
    //        {icon: "../../images/scyh3.png", name: "韩国代购"},
    //        {icon: "../../images/scyh4.png",  name: "ARC潮店"},
    //        {icon: "../../images/scyh1.png",     name: "欧力女装"}], 
    // cuxiao: [{icon: "../../images/d_sp_01.jpg",       name: "收款海绵包包 ￥68.00 $75.00"},
    //        {icon: "../../images/d_sp_02.png", name: "百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //        {icon: "../../images/d_sp_03.png",  name: "百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //        {icon: "../../images/d_sp_04.png",     name: "百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //        {icon: "../../images/d_sp_05.png",     name: "百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //        {icon: "../../images/d_sp_06.png",     name: "百搭学院风英伦背包单双肩包 ￥1.00 $176.00"},
    //        ],     
    indicatorDots: true,  
    autoplay: true,  
    interval: 5000,  
    duration: 1000,  
    userInfo: {}  
  },  
  onLoad: function () {  
    var that = this
    console.log('onLoad test');
    //轮播图
    wx.request({
            url: 'http://www.wangjianmin.com/dishiyue/1011/laravel-v5.1.11/public/xiaochengxu',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    // console.log('res')
                    images: res.data
                })
            }
        })
    //导航
    wx.request({
            url: 'http://www.wangjianmin.com/dishiyue/1011/laravel-v5.1.11/public/daohang',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    // console.log('res')
                    dao: res.data
                })
            }
        })
    //商城客户
     wx.request({
            url: 'http://www.wangjianmin.com/dishiyue/1011/laravel-v5.1.11/public/kehu',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    // console.log('res')
                    kehu: res.data
                })
            }
        })
    //精选促销
     wx.request({
            url: 'http://www.wangjianmin.com/dishiyue/1011/laravel-v5.1.11/public/sale',
            method: 'GET',
            data: {},
            header: {
                'Accept': 'application/json'
            },
            success: function(res) {
                that.setData({
                    // console.log('res')
                    sale: res.data
                })
            }
        })
  }  
}) 

