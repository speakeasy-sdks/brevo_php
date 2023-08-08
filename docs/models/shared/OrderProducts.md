# OrderProducts

Details for the Products in an order.


## Fields

| Field                                                             | Type                                                              | Required                                                          | Description                                                       | Example                                                           |
| ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- | ----------------------------------------------------------------- |
| `price`                                                           | *float*                                                           | :heavy_check_mark:                                                | The price of a unit of product                                    | 99.99                                                             |
| `productId`                                                       | *string*                                                          | :heavy_check_mark:                                                | ID of the product.                                                | P1                                                                |
| `quantity`                                                        | *float*                                                           | :heavy_check_mark:                                                | How many pieces of the product the visitor has added to the cart. | 10                                                                |
| `variantId`                                                       | *?string*                                                         | :heavy_minus_sign:                                                | Product ID of the red color shirts.                               | P100                                                              |