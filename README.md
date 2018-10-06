# v2ray-grpc-sdk-php

由protoco生成的[v2ray](https://github.com/v2ray/v2ray-core)的gRPC调用库php版本,使用composer打包方便使用

## 直接安装

    composer require bluehead/v2ray-grpc-client ^1.0.6
    
## 自行编译

    ./gen.sh
    
脚本做了以下事项：

克隆grpc源码，编译插件

克隆v2ray源码利用v2ray自带的protoc二进制文件生成php代码

为解决名称空间的冲突，脚本做了部分全局替换

默认使用mac版本的protoc binary，其它系统请自行修改脚本

## 为什么要做全局替换

 - protoc没有专门的php_namespace选项，生成的代码空间由package决定，而package还决定了gRPC服务名称

 - packagist上的vendor名称`v2ray`已经被占用
 
 - 生成的GPBMetadata不带任何namepsace，完全取决于proto文件的文件相对路径



