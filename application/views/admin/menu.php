    <div class="col-lg-3 ">

  <uib-accordion close-others="oneAtATime">
    
 
    <uib-accordion-group is-open="status.isCustomHeaderOpen" >
      <uib-accordion-heading>
        热点图片管理 <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.isCustomHeaderOpen, 'glyphicon-chevron-right': !status.isCustomHeaderOpen}"></i>
      </uib-accordion-heading>
      <ul>
      <li><a ui-sref="hots">图片管理</a></li>
     </ul>
      <div ng-repeat="item in items">{{item}}</div>
    </uib-accordion-group>

     <uib-accordion-group >
      <uib-accordion-heading>
        新闻管理 <i class="pull-right glyphicon" ng-class="{'glyphicon-chevron-down': status.isCustomHeaderOpen, 'glyphicon-chevron-right': !status.isCustomHeaderOpen}"></i>
      </uib-accordion-heading>
      <ul>
      <li><a ui-sref="news">新闻管理</a></li>
     </ul>
      
    </uib-accordion-group>
    
	</div>