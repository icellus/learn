###yield

根据php manual,生成器提供了一种更容易的方法来实现简单的对象迭代。
顾名思义，我们想实现迭代一个对象,生成器会是一个好的选择，相对于实现Iterator 接口的方式，性能开销和复杂性会大大降低。

由此，我们思考一下应用场景。当什么时候我们需要，或者想实现一个简单的对象迭代。
最常用的一个场景：我们得到一组数据，需要对这组数据进行处理，处理后需要进行迭代。
常规场景下，我们可能会考虑使用引用，或者创建新数组存储数据。
这个时候，我们是否可以考虑使用生成器。

对场景做简单的分析，假如我们使用生成器，我们需要创建一个生成器(用来实现简单的对象迭代)。可能我们需要在这个时候就需要使用一次循环，或者说直接生成数据。
function test() {
	yield 1;
	yield 2;
	yield 3;
}
function test2() {
	foreach ([1,2,3] as $v){
		yield $v;
	}
}
以上情况，会返回一个同样的生成器。



生成器允许在foreach 中通过代码来迭代一组数据而不需要在内存中创建数组。以此来降低内存损耗和处理时间。
