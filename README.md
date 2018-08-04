# Magento 2 Hide Tax Information

This Extension is used for hide information tax total information when applied tax

## Features:

### Frontend
- hide tax info on checkout payment
- hide tax info on order detail
- change wording to cart from "Estimate Shipping and Tax" to "Estimate Shipping and Order Total"

### Backend
- Set status enable/ disable function under menu Stores >> Configuration >> Sales - Tax Under tabs Orders, Invoices, Credit Memos Display Settings

## Introduction installation:

### Install Magento 2 Hide Price Not Login
- Download file
- Unzip the file
- Create a folder [root]/app/code/Dangs/TaxInfoHide
- Copy to folder

### Enable Extension

```
php bin/magento module:enable Dangs_TaxInfoHide
php bin/magento setup:upgrade
php bin/magento cache:clean
php bin/magento setup:static-content:deploy
```


## Screenshot
![ScreenShot](https://github.com/dsasmita/magento2-hide-tax/blob/master/screen-shot/configuration.png)
![ScreenShot](https://github.com/dsasmita/magento2-hide-tax/blob/master/screen-shot/cart.png)

## Donation
If you find this extension help you,  feel free to donate
:)

[![](https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif)](http://bit.ly/2nFWFZI)
