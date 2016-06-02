<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>|-线上大屏幕申请</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="format-detection" content="telephone=no">
  <!--bootstrap css-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Bootstrap/css/bootstrap.css">
  <!--jquery js-->
  <script type="text/javascript" src="__PUBLIC__/Js/jquery.min.js"></script>
  <!--bootstrap js-->
  <script type="text/javascript" src="__PUBLIC__/Bootstrap/js/bootstrap.js"></script>
  <!--page css-->
  <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/iscreen.css">
  <!--date js-->
  <script type="text/javascript" src="__PUBLIC__/Js/jquery.date.js"></script>
</head>


<body>

<div class="container">
  <!--导航栏目-->
  <nav class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <a class="navbar-brand" href="">大屏幕精灵</a>
    </div>
    <div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="">申请大屏幕</a></li>
          <li><a href="">查看大屏幕</a></li>
          <li><a href="">管理大屏幕</a></a></li>
        </ul>
    </div>
  </nav>
  <!--页面主要内容-->
  <form class="form-horizontal" role="form" id="form">
  <div class="panel panel-default">
    <!--panel title-->
    <div class="panel-heading">基本活动信息</div>
    <!--panel content-->
    <div class="panel-body">
        <!--活动标题-->
        <div class="row">
          <div class="col-md-2"><label>活动名称</label></div>
          <div class="col-md-8">
            <input type="text" name="title" class="form-control" placeholder="请输入活动标题">
          </div>
          <div class="col-md-2"><span>*20个字符以内</span></div>
        </div>

        <!--活动话题-->
        <div class="row">
          <div class="col-md-2"><label>活动话题</label></div>
          <div class="col-md-8">
            <input type="text" name="topic" class="form-control" placeholder="请输入活动话题">
          </div>
          <div class="col-md-2"><span>*10个字符以内</span></div>
        </div>

        <!--开始时间-->
        <div class="row">
          <div class="col-md-2"><label>开始时间</label></div>
          <div class="col-md-4">
            <input type="text" name="stime" class="form-control" placeholder="请选择开始时间" id="st">
          </div>
          <div class="col-md-2"><span></span></div>
        </div>

        <!--结束时间-->
        <div class="row">
          <div class="col-md-2"><label>结束时间</label></div>
          <div class="col-md-4">
            <input type="text" name="ttime" class="form-control" placeholder="请选择结束时间" id="tt">
          </div>
          <div class="col-md-2"><span></span></div>
        </div>

        <!--学校名称-->
        <div class="row">
          <div class="col-md-2"><label>学校名称</label></div>
          <div class="col-md-8">
            <input type="text" name="area" class="form-control">
          </div>
          <div class="col-md-2"><span>*与注册学校一致</span></div>
        </div>

        <!--活动规模-->
        <div class="row">
          <div class="col-md-2"><label>活动规模</label></div>
          <div class="col-md-8">
            <select class="form-control" name="renshu">
                <option value="0-50">0-50</option>
                <option value="50-100">50-100</option>
                <option value="100-50">100-500</option>
                <option value="500-1000">500-1000</option>
                <option value="1000-5000">1000-5000</option>
                <option value="5000-10000">5000-10000</option>
            </select>
          </div>
        </div>
        <!--body结束-->
    </div>
    <!--panel结束-->
  </div>

  <!--页面主要内容-->
  <div class="panel panel-default">
    <!--panel title-->
    <div class="panel-heading">申请人信息</div>
    <!--panel content-->
    <div class="panel-body">
      <!--主办方-->
      <div class="row">
          <div class="col-md-2"><label>主办方名称</label></div>
          <div class="col-md-8">
            <input type="text" name="zb" class="form-control" placeholder="请输入主办方名称">
          </div>
          <div class="col-md-2"><span></span></div>
      </div>

      <!--申请人UID-->
      <div class="row">
          <div class="col-md-2"><label>申请人UID</label></div>
          <div class="col-md-8">
            <input type="text" name="uid" class="form-control">
          </div>
          <div class="col-md-2"><span>*与系统一致</span></div>
      </div>

      <!--申请人电话-->
      <div class="row">
          <div class="col-md-2"><label>申请人电话</label></div>
          <div class="col-md-8">
            <input type="text" name="phone" class="form-control" placeholder="请输入申请人电话">
          </div>
          <div class="col-md-2"><span></span></div>
      </div>
      <!--body 结束-->
    </div>
    <!--panl 结束-->
  </div>

  <!--页面主要内容-->
  <div class="panel panel-default">
    <!--panel title-->
    <div class="panel-heading">其他信息</div>
    <!--panel content-->
    <div class="panel-body">
      <!--绑定投票-->
      <div class="row">
          <div class="col-md-2"><label>绑定投票</label></div>
          <div class="col-md-8">
            <input type="text" name="vid" class="form-control" placeholder="若无，请勿输入">
          </div>
          <div class="col-md-2"><span>*格式为：1:123456,2:234567</span></div>
      </div>

      <!--添加管理-->
      <div class="row">
          <div class="col-md-2"><label>添加管理</label></div>
          <div class="col-md-8">
            <input type="text" name="auid" class="form-control" placeholder="若无，请勿输入">
          </div>
          <div class="col-md-2"><span>*格式为：1:123456,2:234567</span></div>
      </div>

      <!--添加管理-->
      <div class="row">
          <div class="col-md-2"><label>绑定微群</label></div>
          <div class="col-md-8">
            <input type="text" name="qid" class="form-control" placeholder="若无，请勿输入">
          </div>
          <div class="col-md-2"><span>*格式为：1:123456,2:234567</span></div>
      </div>
    <!--body结束-->
    </div>
  <!--panel结束-->
  </div>
  <!--按钮区域-->
  <input type='hidden' value='' name='cs'>
  <div class="sub">确认在线申请</div>
  </form>
</div>

<!--时间控件-->


</body>
</html>