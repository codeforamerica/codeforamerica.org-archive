module Jekyll
  module UniqFilter
    def uniq(arr)
      arr.uniq
    end
    def uniq_array_by(obj,key)
      uniq_array = Array.new
      for item in obj
        unless item[key].nil?
          uniq_array.push(item[key])
        end
      end
      uniq_array.uniq
    end
    def if_it_has(obj,key,val)
      # obj:
      # [
      #  { 'foo' => 'bar', 'baz' => 'fizz', 'lorem' => 'ipsum' },
      #  { 'foo' => 'fizzle', 'baz' => 'fizz', 'lorem' => 'serif' },
      #  { 'foo' => 'bar', 'baz' => 'pop', 'lorem' => 'sit' },
      # ]
      # key: 'foo'
      # val: 'bar'
      # ...
      # Send back an array of objects only where obj[foo] = bar.
      has_array = Array.new
      for item in obj
        if item[key] == val
          has_array.push(item)
        end
      end
      has_array
    end
  end
end

Liquid::Template.register_filter(Jekyll::UniqFilter)
