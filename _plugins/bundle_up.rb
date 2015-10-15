module Jekyll
  module BundleObject
    def bundle_object(obj,keys,max)
      # Returns an array of objects like this:
      #   {
      #     'speaker_name' => 'Foo',
      #     'speaker_photo' => 'Bar'
      #     ...
      #   },
      #   {
      #     'speaker_name' => 'Foo',
      #     'speaker_photo' => 'Bar'
      #     ...
      #   },
      #   ...

      # Pretty bundle of objects to fill up
      bundle = Array.new
      # Create the keys array
      keys_arr = keys.split(',').uniq
      # Loop over the object
      (1..max).each do |i|
        item = Hash.new
        for key in keys_arr
          item[key] = obj["#{key}_#{i}"]
        end
        bundle.push(item)
      end
      bundle
    end
  end
end

Liquid::Template.register_filter(Jekyll::BundleObject)
