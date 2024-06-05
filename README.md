# BaiduBce
BaiduBce.phar Composer版
官方地址：https://cloud.baidu.com/doc/Developer/index.html?sdk=php

# v0.9.22
采用baidu-bce-php-sdk v0.9.22版本

# 使用

## 安装

```
composer require xcwl/baidu-bce
```

## 调用
直接使用`use`引入，如：

```
use BaiduBce\Http\BceHttpClient
```

```
use BaiduBce\Auth\BceV1Signer
```

```
// sts临时凭证
use BaiduBce\Services\Sts\StsClient;
```

```
use BaiduBce\Services\Media\MediaClient;
```

```
use BaiduBce\Services\Bos\BosClient;
```
