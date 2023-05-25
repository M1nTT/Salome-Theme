# Salome-Theme #
Salome-for-Typecho 主题模版

![image](https://github.com/M1nTT/Salome-Theme/blob/18f2e2e28829986601caffc3e504d2db0673f460/screenshot.png)


### 基本介绍

* 适用于 [Typecho](https://typecho.org) 博客
* 专注于写作，排除多余干扰，优化文字显示。
* 本人无代码基础，编码工作由 ChatGPT 提供技术支持。

---

> #### 《莎乐美》
> —— 叶明新
> 
> 莎乐美是希律王的继女
> 
> 长得非常漂亮
> 
> 会跳带有色情意味的
>
> 七层面纱之舞
> 
> 据史料记载
> 
> 她对事物的认知趋于偏激
> 
> 如果你问她什么是爱
> 
> 她只会回答一个字：死
> 
> 施洗者约翰
> 
> 王尔德、海涅
> 
> 理查德·斯特劳斯
> 
> 还有其他人
> 
> 都在不同的时候
> 
> 探讨过这个话题



### 演示地址

[https://blog.tongmingzhi.com](https://blog.tongmingzhi.com)


### 使用方式

* [下载](https://github.com/M1nTT/Salome-Theme/releases/download/ver.0.1.2/Salome.zip)
* 将 Salome 文件夹放到 typecho/usr/themes，在后台页面-控制台-外观启用。


### 功能使用

1. 文章页面插入 Youtube 视频

```html
# 注意，请移除 iframe 后的 width="560" height="315"
# 自行替换 iframe 代码，可以在 Youtube 分享按钮处获取
# 使用这种方式可以让视频窗口自适应页面大小

<div class="video-container">

<iframe src="https://www.youtube.com/embed/KoH80rxtTlQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

</div>
```

2. 使用代码高亮

在代码块的首行 ``` 后输入代码语言即可，若不支持您所使用的语言，请到 Prismjs [官网](https://prismjs.com/download.html#themes=prism-solarizedlight&languages=markup+css+clike+javascript)，下载您个性定制的 CSS 和 JS  文件，再上传到主题对应的文件夹替换原文件即可。

可以参考这篇[文章](https://blog.tongmingzhi.com/2023/05/25/617.html)



### 更新记录

* 2023.05.25  Ver:0.1.2    新增代码高亮显示
* 2023.05.20  Ver:0.1.1    更新 Markdown 标题行间距
* 2023.04.27  Ver:0.1.0    初始版本


### License

「Salome」移植自 shebaoting 的 Typecho 主题 「[重拾写作的乐趣](https://forum.typecho.org/viewtopic.php?f=5&t=12008)」
