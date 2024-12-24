#!/bin/bash

# Cài đặt Java Development Kit (JDK)
apt update
apt install -y default-jdk

# Cài đặt Elasticsearch
wget -qO - https://artifacts.elastic.co/GPG-KEY-elasticsearch | sudo apt-key add -
echo "deb https://artifacts.elastic.co/packages/8.x/apt stable main" | tee /etc/apt/sources.list.d/elastic-8.x.list
apt update
apt install -y elasticsearch

# Khởi động Elasticsearch
systemctl enable elasticsearch
systemctl start elasticsearch
