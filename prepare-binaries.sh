#!/bin/bash

set -e

mkdir -p binaries
mkdir -p binaries/debs

# rm -f binaries/*.xz

# --------------------------------------------------------------------------------------------------------------------------------
# set vars

DISTRHO_VERSION=20140715-1kxstudio1
REPO_FILES_URL=https://launchpad.net/~kxstudio-debian/+archive/ubuntu/plugins/+files/

export XZ_OPT=9

# --------------------------------------------------------------------------------------------------------------------------------
# download debs

function downloadDeb() {
cd binaries/debs
wget -c "$REPO_FILES_URL""$1"_"$2"_amd64.deb
wget -c "$REPO_FILES_URL""$1"_"$2"_i386.deb
cd ../..
}

function downloadDebDistrho() {
downloadDeb "$1-lv2" "$DISTRHO_VERSION"
downloadDeb "$1-vst" "$DISTRHO_VERSION"
}

downloadDeb distrho-mini-series 20140712-1kxstudio1
downloadDeb distrho-mverb       20140712-1kxstudio1
downloadDeb distrho-nekobi      20140712-1kxstudio1

downloadDebDistrho arctican-plugins
downloadDebDistrho dexed
downloadDebDistrho distrho-plugin-ports
downloadDebDistrho drowaudio-plugins
downloadDebDistrho juced-plugins
downloadDebDistrho klangfalter
downloadDebDistrho obxd
downloadDebDistrho pitcheddelay
downloadDebDistrho tal-plugins
downloadDebDistrho wolpertinger

# --------------------------------------------------------------------------------------------------------------------------------
# extract debs and pack them

function compressFolderAsTarXZ() {
rm -f "$1.tar" "$1.tar.xz"
rm -rf "$1"/JuceDemoPlugin.lv2 "$1"/JuceDemoPlugin.so
tar cJf "$1.tar.xz" "$1"
rm -r "$1"
}

function extractDebAndPackIt_DPF() {
cd binaries

mkdir -p tmp
rm -rf tmp/*

NAME="$1"

mkdir -p "$NAME-linux32bit"
dpkg -x debs/"$1"_*_i386.deb tmp
mv tmp/usr/lib/*/*.so tmp/usr/lib/dssi/*-dssi/ tmp/usr/lib/lv2/*.lv2/ "$NAME-linux32bit"
cp "README-DPF" "$NAME-linux32bit/README"
compressFolderAsTarXZ "$NAME-linux32bit"
rm -rf tmp/*

mkdir -p "$NAME-linux64bit"
dpkg -x debs/"$1"_*_amd64.deb tmp
mv tmp/usr/lib/*/*.so tmp/usr/lib/dssi/*-dssi/ tmp/usr/lib/lv2/*.lv2/ "$NAME-linux64bit"
cp "README-DPF" "$NAME-linux64bit/README"
compressFolderAsTarXZ "$NAME-linux64bit"
rm -rf tmp/*

cd ..
}

function extractDebAndPackIt_DISTRHO() {
cd binaries

mkdir -p tmp
rm -rf tmp/*

if [ "$1" == "distrho-plugin-ports" ]; then
NAME="vex"
else
NAME="$1"
fi

mkdir -p "$NAME-linux32bit"
dpkg -x debs/"$1"-lv2_*_i386.deb tmp
dpkg -x debs/"$1"-vst_*_i386.deb tmp
mv tmp/usr/lib/*/*.so tmp/usr/lib/lv2/*.lv2/ "$NAME-linux32bit"
cp "README-DISTRHO" "$NAME-linux32bit/README"
compressFolderAsTarXZ "$NAME-linux32bit"
rm -rf tmp/*

mkdir -p "$NAME-linux64bit"
dpkg -x debs/"$1"-lv2_*_amd64.deb tmp
dpkg -x debs/"$1"-vst_*_amd64.deb tmp
mv tmp/usr/lib/*/*.so tmp/usr/lib/lv2/*.lv2/ "$NAME-linux64bit"
cp "README-DISTRHO" "$NAME-linux64bit/README"
compressFolderAsTarXZ "$NAME-linux64bit"
rm -rf tmp/*

cd ..
}

extractDebAndPackIt_DPF distrho-mini-series
extractDebAndPackIt_DPF distrho-mverb
extractDebAndPackIt_DPF distrho-nekobi

extractDebAndPackIt_DISTRHO arctican-plugins
extractDebAndPackIt_DISTRHO dexed
extractDebAndPackIt_DISTRHO distrho-plugin-ports
extractDebAndPackIt_DISTRHO drowaudio-plugins
extractDebAndPackIt_DISTRHO juced-plugins
extractDebAndPackIt_DISTRHO klangfalter
extractDebAndPackIt_DISTRHO obxd
extractDebAndPackIt_DISTRHO pitcheddelay
extractDebAndPackIt_DISTRHO tal-plugins
extractDebAndPackIt_DISTRHO wolpertinger

# --------------------------------------------------------------------------------------------------------------------------------
