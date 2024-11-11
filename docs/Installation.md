---
category: Overview
nav_order : 2
layout : default
title : Installation
---

# Installation

*How to install the DCC wallet and mining program.*

<br>

### Windows

{: .note .caps}
Currently, there is no Windows version in development. You can still use DCC if you run it in **WSL (Windows Subsystem for Linux)**

### Linux
1. Make sure you have **[OpenSSL installed]** on your system
2. Navigate to **[the most recent release]**, and download the **Linux** version
3. Unzip the downloaded file

### Building From Source
1. Clone this repository in a command line using `git clone https://github.com/The-Distributed-Computing-Project/Distributed-Compute-Coin.git` OR by downloading the repository as a .ZIP file and unzipping it to your location of choice
2. Make sure you have **[OpenSSL installed]** on your system
3. Enter the directory `Distributed-Compute-Coin/dcc_client/out-linux`
4. Run CMake using `cmake ..` to generate Unix Makefile
5. Run `make -j5` to generate executable
6. The executable is `Distributed-Compute-Coin/dcc_client/out-linux/dcc_client/dcc_client`

<br>

### [Now that DCC is installed, see how to begin using it][Usage]

<!----------------------------------------------------------------------------->

[OpenSSL installed]: https://openssl.org/
[the most recent release]: https://github.com/The-Distributed-Computing-Project/Distributed-Compute-Coin/releases/latest
[Usage]: Usage.html
