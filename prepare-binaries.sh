#!/bin/bash

set -e

mkdir -p binaries
mkdir -p binaries/downloads
rm -f binaries/*.xz
rm -f binaries/*.zip

# ---------------------------------------------------------------------------------------------------------------------
# set vars

PORTS_VERSION=2018-04-16
PORTS_URL=https://github.com/DISTRHO/DISTRHO-Ports/releases/download

PLUGINS_VERSION=v1.1
PLUGINS_URL=https://github.com/DISTRHO/DPF-Plugins/releases/download

export XZ_OPT=9

# ---------------------------------------------------------------------------------------------------------------------
# download release

function downloadPorts() {
cd binaries/downloads
wget -c ${PORTS_URL}/${PORTS_VERSION}/DISTRHO-Ports-${PORTS_VERSION}-linux${1}.tar.xz
cd ../..
}

function downloadPlugins() {
cd binaries/downloads
wget -c ${PLUGINS_URL}/${PLUGINS_VERSION}/DPF-Plugins-${PLUGINS_VERSION}-linux32bit.tar.gz
wget -c ${PLUGINS_URL}/${PLUGINS_VERSION}/DPF-Plugins-${PLUGINS_VERSION}-linux64bit.tar.gz
wget -c ${PLUGINS_URL}/${PLUGINS_VERSION}/DPF-Plugins-${PLUGINS_VERSION}-macOS.zip
wget -c ${PLUGINS_URL}/${PLUGINS_VERSION}/DPF-Plugins-${PLUGINS_VERSION}-win32bit.zip
wget -c ${PLUGINS_URL}/${PLUGINS_VERSION}/DPF-Plugins-${PLUGINS_VERSION}-win64bit.zip
cd ../..
}

downloadPorts 32
downloadPorts 64

downloadPlugins

# ---------------------------------------------------------------------------------------------------------------------
# extract all packages

cd binaries
rm -rf linux32 linux64 macOS win32 win64 tmp

function extractPkgsForArch() {
mkdir "$1"
cd "$1"
if (echo $1 | grep -q "linux"); then
    tar xf ../downloads/*"$1"*.gz
    tar xf ../downloads/*"$1"*.xz
else
    unzip ../downloads/*"$1"*.zip
fi
cd ..
}

extractPkgsForArch linux32
extractPkgsForArch linux64
extractPkgsForArch macOS
extractPkgsForArch win32
extractPkgsForArch win64

cd ..

# ---------------------------------------------------------------------------------------------------------------------
# pack Stuff

function packSingleOS() {
RTYPE="$1"
OS="$2"

rm -rf tmp
mkdir tmp
for p in $PLUGINS; do
    if (echo $OS | grep -q "linux"); then
        mv $OS/*/*/$p* tmp/
    else
        mv $OS/*/$p* tmp/
    fi
done
if [ "$RTYPE" = "DPF" ]; then
    cp $OS/*/README* tmp/
else
    cp README-$RTYPE tmp/README
fi
mv tmp $PACK_NAME-$OS
if (echo $OS | grep -q "linux"); then
    rm -f $PACK_NAME-$OS.tar.xz
    tar cJf $PACK_NAME-$OS.tar.xz $PACK_NAME-$OS
else
    rm -f $PACK_NAME-$OS.zip
    zip -r $PACK_NAME-$OS.zip $PACK_NAME-$OS
fi
rm -r $PACK_NAME-$OS
}

function packPlugins() {
PACK_NAME="$1"
PLUGINS="$2 $3 $4 $5 $6"

packSingleOS DPF linux32
packSingleOS DPF linux64
packSingleOS DPF macOS
packSingleOS DPF win32
packSingleOS DPF win64

}

function packPorts() {
PACK_NAME="$1"
PLUGINS="$2 $3 $4 $5 $6"

packSingleOS DISTRHO linux32
packSingleOS DISTRHO linux64

}

# ---------------------------------------------------------------------------------------------------------------------
# pack everything!!

cd binaries

# Plugins
packPlugins distrho-glbars      glBars
packPlugins distrho-kars        Kars
packPlugins distrho-mini-series 3BandEQ 3BandSplitter PingPongPan
packPlugins distrho-nekobi      Nekobi
# packPlugins distrho-prom        ProM

# Ports, from DPF
packPlugins mverb       MVerb
packPlugins ndc-plugins AmplitudeImposer CycleShifter SoulForce

# Ports, from Juce
packPorts arctican-plugins       TheFunction ThePilgrim
packPorts dexed                  Dexed
packPorts drowaudio-plugins      drowaudio-
packPorts easyssp                EasySSP
packPorts juce-opl               JuceOPL
packPorts juced-plugins          drumsynth eqinox
packPorts klangfalter            KlangFalter
packPorts lufsmeter              LUFSMeter
packPorts luftikus               Luftikus
packPorts obxd                   Obxd
packPorts pitcheddelay           PitchedDelay
packPorts refine                 ReFine
packPorts stereosourceseparation StereoSourceSeparation
packPorts tal-plugins            TAL
packPorts vex                    Vex vex
packPorts wolpertinger           Wolpertinger

cd ..

# ---------------------------------------------------------------------------------------------------------------------
