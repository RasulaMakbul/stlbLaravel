public function update(Request $request, Product $product)
{
	// In some way send whether we are going to add or remove product
	// Maybe signed quantity value can be working
	// Here we are collecting the sign separately

	$qty = $product->quantity;
	if ($request->sign == '+') {
		$request->validate([
			'quantity' => 'required|number|min:0', // Check fot minimum add (Might also check whether inventory has enough size to hold the product)
		]);

		$qty += $request->quantity;
	} else {
		$request->validate([
			'quantity' => 'required|number|max:'.$product->quantity, // Check for maximum remove
		]);
		$qty -= $request->quantity;
	}

	$requestData = [
		'quantity' => $qty,
	];

	// Assuming the product qunatity column is in products table
	// Normally it is stored in a separate table (guessing) to track down when products added and when removed
	// If you store the data in a separate table you can do that also but remember to get the quantity in the upper code

	$product->update($requestData);

	return redirect()->back();
}
Write to NULL
