@extends('reception.public.public')
@section('title','关于我们')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('reception/src/css/aboutus.css') }}"/>

    <section id="abtus-introduce">
    	<h2>关于我们</h2>
    	<p>
    		关注人们健康生活方式
    		<br />
    		给予人们从餐饮、到运动、工作，再到家庭生活
    		<br />
    		更全面的健康指导
    		<br />
    		帮助人们正确认知健康管理，合理运用预防医学
    		<br />
    		从而根本上改变人们身体的健康情况
    	</p>

    	<div class="clearfix">
    		<img src="{{ asset('reception/src/img/staff01.jpg') }}"/>
    		<img src="{{ asset('reception/src/img/staff02.jpg') }}"/>
    	</div>
    </section>

    <section id="abtus-culture" class="clearfix">
    	<h2>
    		<span>
    			企业文化
    		</span>
    	</h2>

    	<ul>
    		<li>
    			<h4>愿景</h4>
    			<img src="{{ asset('reception/src/img/yuanjing.png') }}"/>
    			<h5>成为医疗健康管理的全球领先供应商</h5>
    			<p>致力于完善国人膳食营养标准，控制原材料生产源头，建立F2C定制化云计算跨境平台，加强可持续的长期价值，以应对全球快速变化。</p>
    			<p>应用于公司先进的技术水平和完善的组织结构，目标实施符合四大支柱战略的各种举措：快速成长，塑造未来，超盈利能力、获取技术和客户。</p>
    		</li>
    		<li>
    			<h4>使命</h4>
    			<img src="{{ asset('reception/src/img/shiming.png') }}" alt="" />
    			<h5>建立改善国人健康生活方式的健康管理全生态体系。</h5>
    			<p>帮助人们正确认知健康管理，合理运用预防医学，从而根本上改变人们身体的亚健康情况。</p>
    			<p>关注人们健康生活方式，改变和监控生产源头，根本解决人们的餐桌问题，给予人们从餐饮、到运动、工作，再到家庭生活，更全面的健康指导。</p>
    		</li>
    	</ul>
    </section>

	<section id="abtus-contact" class="clearfix">
		<div class="contact-info">
			<img src="{{ asset('reception/src/img/hello.png') }}"/>
			<span>
				<h4>联系我们</h4>
				<p>
				健康之家集团有限公司
				<br />
				北京分公司：云康健智国际生态科技发展（北京）有限公司
				<br />
				地址:北京海淀区中关村创业大厦金种子创业谷1层
				</p>
			</span>
		</div>

		<img class="map-img" src="{{ asset('reception/src/img/map.png') }}" alt="" />
		<!--<div id="container"></div>-->
	</section>

	<!--<script>
	    var marker, map = new AMap.Map("container", {
	        resizeEnable: true,
	        center: [116.311129,40.037048],
	        zoom: 18
	    });


	  	addMarker();
	    // 实例化点标记
	    function addMarker() {
	        if (marker) {
	            return;
	        }
	        marker = new AMap.Marker({
	            icon: "http://webapi.amap.com/theme/v1.3/markers/n/mark_b.png",
	            position: [116.311129,40.037048]
	        });
	        marker.setMap(map);
	    }

	    function updateMarker() {
	        // 自定义点标记内容
	        var markerContent = document.createElement("div");

	        // 点标记中的图标
	        var markerImg = document.createElement("img");
	        markerImg.className = "markerlnglat";
	        markerImg.src = "http://webapi.amap.com/theme/v1.3/markers/n/mark_r.png";
	        markerContent.appendChild(markerImg);

	    }
	</script>-->


	<section id="abtus-joinus">
		<div>
			<h3>注入新鲜血液</h3>
			<a href="#">加入我们</a>
		</div>
	</section>
@endsection
