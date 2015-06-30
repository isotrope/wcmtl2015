/**
 Created by Michal Bluma for WCMTL2015
 */


(function ($) {

	if (typeof DIAGRAMMAR === 'undefined') {
		DIAGRAMMAR = {};
	}


	DIAGRAMMAR.showCss = {
		init                : function () {
			var _this = DIAGRAMMAR.showCss;

			_this.$mainContainer = $('.diagrammar-container');

			if (_this.$mainContainer.length > 0) {

				_this.$allItems = _this.$mainContainer.find('.diag-item');
				_this.createDebugBox();
				_this.gatherCssInformation();
				_this.refreshDebugBox();
				_this.makeMoveable();
				_this.makeSelectable();

				_this.addAlignButton();
				_this.bindEvents();
			}
		},
		bindEvents          : function () {
			var _this = DIAGRAMMAR.showCss;

			_this.$alignButton.on('click', function () {
				_this.alignVertical();
			});

		},
		gatherCssInformation: function () {
			var _this = DIAGRAMMAR.showCss;

			_this.arrCssInfo = [];

			_this.$allItems.each(function () {
				var $this = $(this),
					positionLeft = Math.floor($this.position().left),
					positionTop = Math.floor($this.position().top),
					itemInfo = {
						'id'  : $this.attr('id'),
						'left': positionLeft,
						'top' : positionTop,
						'item': $this
					};

				$this.data('pos-left', positionLeft).data('pos-top', positionTop);
				_this.arrCssInfo.push(itemInfo);

			});


			console.table(_this.arrCssInfo);


		},
		makeMoveable        : function () {
			var _this = DIAGRAMMAR.showCss;

			_this.$allItems.each(function () {
				var $this = $(this);

				$this.css({
					'position': 'absolute',
					'left'    : $this.data('pos-left'),
					'top'     : $this.data('pos-top')
				});
			});

			_this.$allItems.draggable({
				stop: function (event, ui) {
					_this.gatherCssInformation();
					_this.updateContainer();
					_this.refreshDebugBox();
				}
			});

		},
		createDebugBox      : function () {
			var _this = DIAGRAMMAR.showCss;

			_this.$debugBox = $('<div class="diagrammar-debug-box" />').appendTo('body');

		},
		refreshDebugBox     : function () {
			var _this = DIAGRAMMAR.showCss;

			var htmlOutput = '';

			htmlOutput += '<div class="debug-section">'
			htmlOutput += '<div class="debug-item-info">'
			htmlOutput += '<div class="debug-item-id"><span class="css-label css-id">#</span>' + _this.$mainContainer.attr('id') + ' {</div>';
			htmlOutput += '<div class="debug-item-height"><span class="css-label css-height">height: </span><span class="css-value">' + _this.$mainContainer.css('height') + '</span></div>';
			htmlOutput += '<div class="debug-item-width"><span class="css-label css-width">width: </span><span class="css-value">' + _this.$mainContainer.css('width') + '</span></div>';
			htmlOutput += '}</div>'; // debug-item-info
			htmlOutput += '</div>'; // debug-section


			for (var i = 0; i < _this.arrCssInfo.length; i++) {
				var itemInfo = _this.arrCssInfo[i];

				htmlOutput += '<div class="debug-section">'
				htmlOutput += '<div class="debug-item-info">'
				htmlOutput += '<div class="debug-item-id"><span class="css-label css-id">#</span>' + itemInfo['id'] + ' {</div>';
				htmlOutput += '<div class="debug-item-top"><span class="css-label css-width">top: </span><span class="css-value">' + itemInfo['top'] + '</span>px</div>';
				htmlOutput += '<div class="debug-item-left"><span class="css-label css-height">left: </span><span class="css-value">' + itemInfo['left'] + '</span>px</div>';
				htmlOutput += '}</div>'; // debug-item-info
				htmlOutput += '</div>'; // debug-section

			}


			_this.$debugBox.html(htmlOutput);
		},
		updateContainer     : function () {
			var _this = DIAGRAMMAR.showCss;

			var maxTop = 0,
				maxLeft = 0,
				$mostTop,
				$mostLeft;

			for (var i = 0; i < _this.arrCssInfo.length; i++) {
				var obj = _this.arrCssInfo[i],
					itemTop = obj['top'],
					itemHeight = obj['item'].outerHeight(),
					itemTopmost = itemTop + itemHeight,
					itemLeft = obj['left'],
					itemWidth = obj['item'].outerWidth(),
					itemLeftmost = itemLeft + itemWidth;

				if (itemTopmost > maxTop) {
					maxTop = itemTopmost;
				}

				if (itemLeftmost > maxLeft) {
					maxLeft = itemLeftmost;
				}


			}

			_this.$mainContainer.css({
				'width' : maxLeft,
				'height': maxTop
			});

		},
		makeSelectable      : function () {
			var _this = DIAGRAMMAR.showCss;

			_this.$mainContainer.selectable({
				appendTo: _this.$mainContainer
			});
		},
		addAlignButton      : function () {
			var _this = DIAGRAMMAR.showCss;

			_this.$alignButton = $('<button class="diagrammar-align-button">Align</button>').appendTo('body');
		},
		alignVertical       : function () {
			var _this = DIAGRAMMAR.showCss;

			var $selectedItems = _this.$allItems.filter('.ui-selected'),
				minTop = 99999999;

			if ($selectedItems.length > 0) {

				$selectedItems.each(function () {
					var $this = $(this),
						itemTop = $this.position().top;


					console.log('minTop: ', minTop, '   itemTop: ', itemTop);
					minTop = itemTop < minTop ? itemTop : minTop;
				});


				$selectedItems.css({
					top: minTop
				});

				_this.gatherCssInformation();
				_this.updateContainer();
				_this.refreshDebugBox();
			}
		}
	}


	$(document).ready(function () {
		DIAGRAMMAR.showCss.init();
	});
})(jQuery);
