@extends('reception.public.public')
@section('title',' HealtherGroup－追求卓越，精益求精 ')
@section('style')

@endsection
@section('content')
    <!-- 首页 -->
  <div class="banner">
    <img src="{{ asset('reception/images/banner.jpg') }}" alt="" usemap="#my-banner">
  </div>
  <div class="my-body">
    <div class="my-body-div1">
      <div class="my-body-div1-1"><img src="{{ asset('reception/images/left.png') }}" alt=""></div>
      <div class="my-body-div1-2 h4">推荐产品</div>
      <div class="my-body-div1-3"><img src="{{ asset('reception/images/right.png') }}" alt=""></div>
    </div>
    <div class="my-body-div2">
      <a href="/id/1">健康饮食</a>
      <a href="/id/2">智能穿戴</a>
      <a href="/id/3">绿色家居</a>
    </div>
    <div class="my-body-div3 container">
      <ul class="row">
      @foreach($goods as $goods)
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="{{ asset('/goods') }}/{{$goods->id}}"><img class="img-responsive" src="{{ $goods->thumbnail }}" alt=""></a>
          <ul>
            <li><a href="{{ asset('/goods') }}/{{$goods->id}}">{{ $goods->name }}</a></li>
            <li>￥{{ $goods->price}}</li>
          </ul>
        </li>
      @endforeach
      </ul>
      <a href="###">
        <div class="h4">
          <a href="{{ asset('Shoplist') }}/{{ $re->id }}">查看更多{{ $re->name }}商品</a>
        </div>
      </a>
    </div>
    <div class="my-body-div3 container">
      <ul class="row">
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/1.png') }}" alt=""></a>
          <ul>
            <li><a href="###">2玉蝴蝶兰花茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/2.png') }}" alt=""></a>
          <ul>
            <li><a href="###">化橘红止咳茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/3.png') }}" alt=""></a>
          <ul>
            <li><a href="###">罗汉果百合花</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/4.png') }}" alt=""></a>
          <ul>
            <li><a href="###">薄荷龙井茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/1.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
      </ul>
      <ul class="row">
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/2.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/3.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/4.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
      </ul>
      <a href="###">
        <div class="h4">
          查看更多花果茶商品
          <img src="{{ asset('reception/images/jiantou.png') }}" alt="">
        </div>
      </a>
    </div>
    <div class="my-body-div3 container">
      <ul class="row">
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/1.png') }}" alt=""></a>
          <ul>
            <li><a href="###">3玉蝴蝶兰花茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/2.png') }}" alt=""></a>
          <ul>
            <li><a href="###">化橘红止咳茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/3.png') }}" alt=""></a>
          <ul>
            <li><a href="###">罗汉果百合花</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/4.png') }}" alt=""></a>
          <ul>
            <li><a href="###">薄荷龙井茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/1.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
      </ul>
      <ul class="row">
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/2.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/3.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/4.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
        <li class="col-lg-2 col-md-2 col-sm-4 col-xs-4"><a href="###"><img class="img-responsive" src="{{ asset('reception/images/2/5.png') }}" alt=""></a>
          <ul>
            <li><a href="###">贡菊薄荷茶</a></li>
            <li>￥199</li>
          </ul>
        </li>
      </ul>
      <a href="###">
        <div class="h4">
          查看更多花果茶商品
          <img src="{{ asset('reception/images/jiantou.png') }}" alt="">
        </div>
      </a>
    </div>



    <div class="my-body-div4 h4">
      优质的预约服务
    </div>


    <div class="my-body-div5 container">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div>
            <img src="{{ asset('reception/images/2/6.png') }}" alt="">
            <div class="my-body-div5-div1 h4">专业营养师</div>
            <h4>为您量身定制营养目标</h4>
            <span>每天推荐饮食</span>
            <a href="{{ asset('/Subscribelist/1') }}">在线预约</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div>
            <img src="{{ asset('reception/images/2/7.png') }}" alt="">
            <div class="my-body-div5-div1 h4">健身教练</div>
            <h4>只为改变 减肥ING</h4>
            <span>合理运动 健康无限</span>
            <a href="{{ asset('/Subscribelist/3') }}">在线预约</a>
          </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
          <div>
            <img src="{{ asset('reception/images/2/8.png') }}" alt="">
            <div class="my-body-div5-div1 h4">私人医生</div>
            <h4>专业讲解各类疾病</h4>
            <span>专业的私人医生团队</span>
            <a href="{{ asset('/Subscribelist/2') }}">在线预约</a>
          </div>
        </div>
      </div>
    </div>

    <div class="my-body-div6 container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div >
            <img src="{{ asset('reception/images/guoqi.png') }}" alt="">
          </div>
          <div>
            <span class="h4">营养师：Alesandr</span>
            <br>
            <br>
            <br>
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigkong.png') }}" alt="">
            <span class="my-body-div6-span">4.0</span>
          </div>
          <div class="shixian"></div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div>
            <img src="{{ asset('reception/images/guoqi.png') }}" alt="">
          </div>
          <div>
            <span class="h4">营养师：Alesandr</span>
            <br>
            <br>
            <br>
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigkong.png') }}" alt="">
            <span class="my-body-div6-span">4.0</span>
          </div>
          <div class="shixian"></div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div>
            <img src="{{ asset('reception/images/guoqi.png') }}" alt="">
          </div>
          <div>
            <span class="h4">营养师：Alesandr</span>
            <br>
            <br>
            <br>
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigshi.png') }}" alt="">
            <img src="{{ asset('reception/images/bigkong.png') }}" alt="">
            <span class="my-body-div6-span">4.0</span>
          </div>
          <div class="shixian"></div>
        </div>
      </div>
    </div>
    <div class="my-body-div7 container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('reception/images/kongxin3.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-4">
              <p>张**</p>
              <br>
              <p>2016-10-30</p>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <br>
              <br>
              <p class="my-body-div7-p1">15:23:51</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('reception/images/kongxin3.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-4">
              <p>张**</p>
              <br>
              <p>2016-10-30</p>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <br>
              <br>
              <p class="my-body-div7-p1">15:23:51</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="row">
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('reception/images/kongxin3.png') }}" alt="">
            </div>
            <div class="col-lg-4 col-md-4">
              <p>张**</p>
              <br>
              <p>2016-10-30</p>
            </div>
            <div class="col-lg-4 col-md-4">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <img src="{{ asset('reception/images/samllxingshi.png') }}" alt="">
              <br>
              <br>
              <p class="my-body-div7-p1">15:23:51</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="my-body-div7 container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <p>很贴心的建议，而且特别的专业，通过一段时间的 调整，身体状况得到了改善，很高兴能得到国外营 养师的指点，满分评价！！</p>
          <div class="xuxian"></div>
        </div>
        <div class="col-lg-4 col-md-4">
          <p>很贴心的建议，而且特别的专业，通过一段时间的 调整，身体状况得到了改善，很高兴能得到国外营 养师的指点，满分评价！！</p>
          <div class="xuxian"></div>
        </div>
        <div class="col-lg-4 col-md-4">
          <p>很贴心的建议，而且特别的专业，通过一段时间的 调整，身体状况得到了改善，很高兴能得到国外营 养师的指点，满分评价！！</p>
          <div class="xuxian"></div>
        </div>
      </div>
    </div>
    <div class="my-body-div8 container">
      <div class="row">
        <div class="col-lg-4 col-md-4">
          <a href="###"><img src="{{ asset('reception/images/zuojiantou.png') }}" alt=""><img src="" alt=""></a>
          <a href="###"><img src="{{ asset('reception/images/youjiantou.png') }}" alt=""><img src="" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="###"><img src="{{ asset('reception/images/zuojiantou.png') }}" alt=""><img src="" alt=""></a>
          <a href="###"><img src="{{ asset('reception/images/youjiantou.png') }}" alt=""><img src="" alt=""></a>
        </div>
        <div class="col-lg-4 col-md-4">
          <a href="###"><img src="{{ asset('reception/images/zuojiantou.png') }}" alt=""><img src="" alt=""></a>
          <a href="###"><img src="{{ asset('reception/images/youjiantou.png') }}" alt=""><img src="" alt=""></a>
        </div>
      </div>
    </div>
  </div>
    <div class="my-body-div9  width-auto">
      <div class="area my-body-div9-1">
        <div class="my-body-div9-div-1 float-left">
          <div class="float-left my-body-div9-div-2">
              <p class="my-body-div9-p"><b>基因检测</b></p>
              <img src="{{ asset('reception/images/jiyinjiancekong.png') }}" alt="">
          </div>
          <ul class="float-left my-body-div9-ul">
            <li><a href="###">重大疾病筛查</a></li>
            <li><a href="###">癌症风险筛查</a></li>
            <li><a href="###">儿童天赋检测</a></li>
            <li><a href="###">儿童健康检测</a></li>
            <li><a href="###">成人常见疾病风险</a></li>
            <li><a href="###">儿童常见疾病风险</a></li>
          </ul>
          <span class="float-right my-body-div9-span"><a href="###">立即检测</a></span>
        </div>
        <div class="my-body-div9-div-3 float-left">
          <div class="float-left my-body-div9-div-2">
              <p class="my-body-div9-p"><b>分子检测</b></p>
              <img src="{{ asset('reception/images/liangzijiancekong.png') }}" alt="">
          </div>
          <ul class="float-left my-body-div9-ul">
            <li><a href="###">DNA检测</a></li>
            <li><a href="###">聚合酶链反应</a></li>
            <li><a href="###">生物芯片技术</a></li>
            <li><a href="###">连接酶链反应</a></li>
            <li><a href="###">人类基因组计划</a></li>
            <li><a href="###">核酸分子杂交技术</a></li>
          </ul>
          <span class="float-right my-body-div9-span"><a href="###">立即检测</a></span>
        </div>
      </div>



      <div class="index-body-div-9-phone">
        <div class="index-body-div-9-phone-1 float-left">
          <p class="my-body-div9-p">基因检测</p>
          <img src="{{ asset('reception/images/jiyinjiancekong.png') }}" alt="">
        </div>
          <ul class="index-body-div-9-phone-2 float-left">
            <li><a href="###">重大疾病筛查</a></li>
            <li><a href="###">癌症风险筛查</a></li>
            <li><a href="###">儿童天赋检测</a></li>
            <li><a href="###">儿童健康检测</a></li>
            <li><a href="###">成人常见疾病风险</a></li>
            <li><a href="###">儿童常见疾病风险</a></li>
            <li class="index-body-div-9-phone-2-li"><a href="###">立即检测</a></li>
          </ul>
      </div>
      <div class="index-body-div-9-phone">
        <div class="index-body-div-9-phone-1 float-left">
          <p class="my-body-div9-p">分子检测</p>
          <img src="{{ asset('reception/images/liangzijiancekong.png') }}" alt="">
        </div>
          <ul class="index-body-div-9-phone-2 float-left">
            <li><a href="###">DNA检测</a></li>
            <li><a href="###">聚合酶链反应</a></li>
            <li><a href="###">生物芯片技术</a></li>
            <li><a href="###">连接酶链反应</a></li>
            <li><a href="###">人类基因组计划</a></li>
            <li><a href="###">核酸分子杂交技术</a></li>
            <li class="index-body-div-9-phone-2-li"><a href="###">立即检测</a></li>
          </ul>
      </div>
    </div>



  <div class="content">
    <img src="{{ asset('reception/images/content.jpg') }}" alt="">
    <div class="content-div1 h4">以“为人类健康服务”为宗旨</div>
    <div class="container content-div2">
      <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <a href="###"><img src="{{ asset('reception/images/icon1.png') }}" alt=""></a>
          <br>
          <br>
          <h4>企业目标</h4>
          <br>
          <p>打造基于O2O平台的新型健康餐饮产品和基于互 联网新技术的电商+私人定制UGC销售模式</p>
          <br>
          <br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <a href="###"><img src="{{ asset('reception/images/icon2.png') }}" alt=""></a>
          <br>
          <br>
          <h4>健康管理</h4>
          <br>
          <p>基于全天然无化学合成的产品和人性化移动智能 大数据服务 </p>
          <br>
          <br>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
          <a href="###"><img src="{{ asset('reception/images/icon3.png') }}" alt=""></a>
          <br>
          <br>
          <h4>研究发展</h4>
          <br>
          <p>HealtherGroup发展智慧健康医疗便民惠民服务， 整合线上和线下资源，优化形成规范、共享、互信 的健康管理和慢病诊疗流</p>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class="content1">
    <div>
      <div class="content1-div1">
        产品视频
        <a href="###">
          <img src="{{ asset('reception/images/xiangyoutouming.png') }}" alt="">
        </a>
      </div>
      <div class="content1-div5">
        <div class="content1-div2">
          <a href="###">
            <img src="{{ asset('reception/images/img3.png') }}" alt="">
          </a>
        </div>
        <div class="content1-div3">
          <a href="###">
            <img src="{{ asset('reception/images/img2.png') }}" alt="">
          </a>
        </div>
        <div class="content1-div4">
          <a href="###">
            <img src="{{ asset('reception/images/img1.png') }}" alt="">
          </a>
        </div>
      </div>
    </div>
  </div>


  <div class="content2">
    <div>
      <div>
        <img src="{{ asset('reception/images/LOGOtouming.png') }}" alt="">
          <div>
          <video class="img-responsive" controls="controls" poster="http://www.healthergroup.cn/reception/images/ScreenShot00001.jpg">
            <source src="http://ogw4dsfiz.bkt.clouddn.com/sp.mp4" type="video/mp4">
            Your browser does not support the video tag.
          </video>
          </div>
        <dl class="visible-md-block visible-lg-block">
          <dt class="h4">Healther Group新产品发布会兼意大利</dt>
          <dd class="h5">Antica Signoria环保艺术涂料培训会</dd>
        </dl>
      </div>
      <img src="{{ asset('reception/images/xiangyou.png') }}" alt="">
    </div>
  </div>



  <div class="footer">
    <div class="footer-div1">
      合作伙伴
    </div>
    <div class="footer-div2">
      <ul>
        <li>
          <a href="###">
            <img src="{{ asset('reception/images/1.png') }}" alt="">
            <img src="{{ asset('reception/images/1hover.png') }}" alt="">
          </a>
        </li>
        <li>
          <a href="http://www.anticasignoria.it" target="view_window">
            <img src="{{ asset('reception/images/2.png') }}" alt="">
            <img src="{{ asset('reception/images/2hover.png') }}" alt="">
          </a>
        </li>
        <li>
          <a href="###">
            <img src="{{ asset('reception/images/3.png') }}" alt="">
            <img src="{{ asset('reception/images/3hover.png') }}" alt="">
          </a>
        </li>
        <li>
          <a href="http://www.aijiyin.com.cn" target="view_window">
            <img src="{{ asset('reception/images/4.png') }}" alt="">
            <img src="{{ asset('reception/images/4hover.png') }}" alt="">
          </a>
        </li>
        <li>
          <a href="http://www.woodpluscoatings.com" target="view_window" >
            <img src="{{ asset('reception/images/5.png') }}" alt="">
            <img src="{{ asset('reception/images/5hover.png') }}" alt="">
          </a>
        </li>
        <li>
          <a href="http://www.edup.cn" target="view_window">
            <img src="{{ asset('reception/images/6.png') }}" alt="">
            <img src="{{ asset('reception/images/6hover.png') }}" alt="">
          </a>
        </li>
        <li>
          <a href="###">
            <img src="{{ asset('reception/images/7.png') }}" alt="">
            <img src="{{ asset('reception/images/7hover.png') }}" alt="">
          </a>
        </li>
      </ul>
    </div>
@endsection
