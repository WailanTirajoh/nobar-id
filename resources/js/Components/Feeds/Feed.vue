<template>
  <div>
    <div
      class="bg-gray-800 rounded-3xl shadow-inner px-4 py-3 mb-2"
      v-for="(feed, index) in feeds"
      :key="index"
    >
      <div class="flex">
        <friend-circle
          :avatar="feed.avatar"
          :is-online="feed.isOnline"
          class="w-14"
        ></friend-circle>
        <div class="ml-3">
          <h5 class="text-sm align-top font-semibold">
            <div>
              {{ feed.name }}
            </div>
            <div class="font-light text-xs">{{ feed.created_at }}</div>
          </h5>
        </div>
      </div>
      <div class="mt-1">
        <p class="leading-normal text-xs">
          {{ feed.status }}
        </p>
      </div>
      <hr class="my-1" />
      <div class="flex justify-between mt-2 mb-2">
        <div class="flex">
          <floating class="mr-2">
            <button>
              <div class="flex">
                <div class="mx-1 text-xs">{{ feed.totalLikes }}</div>
                <thumbs-up-icon size="1.25x"></thumbs-up-icon>
              </div>
            </button>
          </floating>
          <floating>
            <button>
              <div class="flex">
                <div class="mx-1 text-xs">{{ feed.totalDisikes }}</div>
                <thumbs-down-icon size="1.25x"></thumbs-down-icon>
              </div>
            </button>
          </floating>
        </div>
        <div class="flex">
          <floating>
            <button @click="openComments(index)">
              <div class="flex">
                <div class="mx-1 text-xs">{{ feed.comments.length }}</div>
                <message-square-icon size="1.25x"></message-square-icon>
              </div>
            </button>
          </floating>
        </div>
      </div>
      <div :id="'comment-' + index" class="hidden">
        <div class="max-h-40 overflow-y-auto">
          <div
            class="bg-gray-900 rounded-xl mt-1 flex"
            v-for="(comment, index) in feed.comments"
            :key="index"
          >
            <div class="p-2 text-xs w-full">
              <div class="flex justify-between w-full">
                <div class="font-bold">
                  {{ comment.name }}
                </div>
                <div class="font-light">
                  {{ comment.created_at }}
                </div>
              </div>
              <p>
                {{ comment.status }}
              </p>
            </div>
          </div>
        </div>
        <div class="mt-2">
          <div class="relative">
            <input
              type="text"
              class="w-full h-full rounded-xl text-black px-2 py-2"
              placeholder="Type to reply"
            />
            <div class="absolute right-2 bottom-1">
              <button class="p-1 bg-gray-700 rounded-full">
                <send-icon size="1.25x"></send-icon>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import {
  HeartIcon,
  ThumbsDownIcon,
  ThumbsUpIcon,
  MessageSquareIcon,
  SendIcon,
} from "vue-feather-icons";
import FriendCircle from "@/Components/FriendCircle";
import Floating from "@/Components/Floating";

export default {
  components: {
    HeartIcon,
    ThumbsDownIcon,
    ThumbsUpIcon,
    MessageSquareIcon,
    FriendCircle,
    Floating,
    SendIcon,
  },
  props: {
    feeds: Array,
  },
  methods: {
    openComments(index) {
      var commentElement = document.getElementById("comment-" + index);
      commentElement.classList.contains("hidden")
        ? commentElement.classList.remove("hidden")
        : commentElement.classList.add("hidden");
    },
  },
};
</script>
