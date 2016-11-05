<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = '我的订单';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="m_content">
    <div class="m_left">
        <div class="left_n">管理中心</div>
        <div class="left_m">
            <div class="left_m_t t_bg1">订单中心</div>
            <ul>
                <li><a href="Member_Order.html" class="now">我的订单</a></li>
                <li><a href="Member_Address.html">收货地址</a></li>
                <li><a href="#">缺货登记</a></li>
                <li><a href="#">跟踪订单</a></li>
            </ul>
        </div>
        <div class="left_m">
            <div class="left_m_t t_bg2">会员中心</div>
            <ul>
                <li><a href="Member_User.html">用户信息</a></li>
                <li><a href="Member_Collect.html">我的收藏</a></li>
                <li><a href="Member_Msg.html">我的留言</a></li>
                <li><a href="Member_Links.html">推广链接</a></li>
                <li><a href="#">我的评论</a></li>
            </ul>
        </div>
        <div class="left_m">
            <div class="left_m_t t_bg3">账户中心</div>
            <ul>
                <li><a href="Member_Safe.html">账户安全</a></li>
                <li><a href="Member_Packet.html">我的红包</a></li>
                <li><a href="Member_Money.html">资金管理</a></li>
            </ul>
        </div>
        <div class="left_m">
            <div class="left_m_t t_bg4">分销中心</div>
            <ul>
                <li><a href="Member_Member.html">我的会员</a></li>
                <li><a href="Member_Results.html">我的业绩</a></li>
                <li><a href="Member_Commission.html">我的佣金</a></li>
                <li><a href="Member_Cash.html">申请提现</a></li>
            </ul>
        </div>
    </div>
    <div class="m_right">
        <p></p>
        <div class="mem_tit">我的订单</div>
        <table border="0" class="order_tab" style="width:930px; text-align:center; margin-bottom:30px;" cellspacing="0" cellpadding="0">
            <tr>
                <td width="20%">订单号</td>
                <td width="25%">下单时间</td>
                <td width="15%">订单总金额</td>
                <td width="25%">订单状态</td>
                <td width="15%">操作</td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>未确认，未付款，未发货</td>
                <td>取消订单</td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>已确认，已付款，已发货</td>
                <td><font color="#ff4e00">已确认</font></td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>未确认，未付款，未发货</td>
                <td>取消订单</td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>已确认，已付款，已发货</td>
                <td><font color="#ff4e00">已确认</font></td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>未确认，未付款，未发货</td>
                <td>取消订单</td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>已确认，已付款，已发货</td>
                <td><font color="#ff4e00">已确认</font></td>
            </tr>
            <tr>
                <td><font color="#ff4e00">2015092823056</font></td>
                <td>2015-09-26   16:45:20</td>
                <td>￥456.00</td>
                <td>未确认，未付款，未发货</td>
                <td>取消订单</td>
            </tr>
        </table>


        <div class="mem_tit">合并订单</div>
        <table border="0" class="order_tab" style="width:930px;"  cellspacing="0" cellpadding="0">
            <tr>
                <td width="135" align="right">主订单</td>
                <td width="220">
                    <select class="jj" name="order1">
                        <option value="0" selected="selected">请选择...</option>
                        <option value="1">2015092626589</option>
                        <option value="2">2015092626589</option>
                        <option value="3">2015092626589</option>
                        <option value="4">2015092626589</option>
                    </select>
                </td>
                <td width="135" align="right">从订单</td>
                <td width="220">
                    <select class="jj" name="order2">
                        <option value="0" selected="selected">请选择...</option>
                        <option value="1">2015092626589</option>
                        <option value="2">2015092626589</option>
                        <option value="3">2015092626589</option>
                        <option value="4">2015092626589</option>
                    </select>
                </td>
                <td><div class="btn_u"><a href="#">合并订单</a></div></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td colspan="4" style="font-family:'宋体'; padding:20px 10px 50px 10px;">
                    订单合并是在发货前将相同状态的订单合并成一新的订单。 <br />
                    收货地址，送货方式等以主定单为准。
                </td>
            </tr>
        </table>


    </div>
</div>