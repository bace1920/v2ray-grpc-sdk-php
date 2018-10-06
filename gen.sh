#!/bin/sh
# make protoc-php-plugin which used to gen php code
#git clone -b $(curl -L https://grpc.io/release) https://github.com/grpc/grpc
cd grpc
#git submodule update --init
#make grpc_php_plugin

cd ../
git clone https://github.com/v2ray/v2ray-core.git
cd ./v2ray-core
# replace package name to dir path
#sed -ir 's:import "v2ray.com/core/:import ":' ./**/*.proto
#sed -ir 's#package v2ray.core#package bluehead.v2ray.core#' **/*.proto
sed -ir 's:import "v2ray.com/core/:import ":' $(find . -type f -name "*.proto")
sed -ir 's:package v2ray.core:package bluehead.v2ray.core:' $(find . -type f -name "*.proto")

#./.dev/protoc/macos/protoc --proto_path=./ --php_out=../src  --grpc_out=../src --plugin=protoc-gen-grpc=./../grpc/bins/opt/grpc_php_plugin ./**/*.proto
./.dev/protoc/macos/protoc --proto_path=./ --php_out=../src  --grpc_out=../src --plugin=protoc-gen-grpc=./../grpc/bins/opt/grpc_php_plugin $(find . -type f -name "*.proto")

cd ../src
sed -i '' 's:/bluehead.v2ray.core:/v2ray.core:' $(find . -type f -name "*.php")
sed -i '' 's:GPBMetadata:Bluehead\\V2ray\\GPBMetadata:' $(find . -type f -name "*.php")
echo finished
