<template>
    <el-form class="w-full" :model="form" label-width="120px" :rules="rules" ref="formRef" size="large">
      <el-row :gutter="20">
        <el-col :xs="24" :sm="12">
          <el-form-item label="First name" prop="firstname">
            <el-input v-model="form.firstname" />
          </el-form-item>
        </el-col>
        <el-col :xs="24" :sm="12">
          <el-form-item label="Last name" prop="lastname">
            <el-input v-model="form.lastname" />
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :xs="24" :sm="24">
          <el-form-item label="Email" prop="email">
            <el-input v-model="form.email" type="email" />
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :xs="24" :sm="12">
          <el-form-item label="Date Range" prop="daterange">
            <el-date-picker
              v-model="form.daterange"
              type="daterange"
              range-separator="To"
              start-placeholder="Start date"
              end-placeholder="End date"
              style="width: 100%"
              :min-date="minDepartureDate"
            />
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :xs="24" :sm="24">
          <el-form-item label="Program" prop="program">
            <el-select v-model="form.program" placeholder="Select a program" style="width: 100%">
              <el-option
                v-for="program in programs"
                :key="program.id"
                :label="program.name"
                :value="program.name"
              />
            </el-select>
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :xs="24" :sm="24">
          <el-form-item label="More Info" prop="moreInfo">
            <el-input
              v-model="form.moreInfo"
              type="textarea"
              :rows="4"
              placeholder="Please provide any additional details about your trip"
            />
          </el-form-item>
        </el-col>
      </el-row>

      <el-row :gutter="20">
        <el-col :xs="24" :sm="24">
          <el-form-item class="flex justify-end">
            <el-button type="primary" @click="onSubmit">Submit</el-button>
            <el-button @click="resetForm">Reset</el-button>
          </el-form-item>
        </el-col>
      </el-row>
    </el-form>
  </template>
  
  <script lang="ts" setup>
  import { ref } from 'vue'
  import type { FormInstance, FormRules } from 'element-plus'
  import { useForm } from '@inertiajs/vue3'
  
  const programs = ref([
    {
        id: 1,
        name: 'Mysteries of the Pharaohs (7 days)',
    },
    {
        id: 2,
        name: 'Nile Cruise Adventure (10 days)',
    },
    {
        id: 3,
        name: 'Total Immersion (14 days)',
    },
    {
        id: 4,
        name: 'The Treasures of Alexandria (6 days)',
    },
    {
        id: 5,
        name: 'Oasis & Desert Expedition (8 days)',
    }
  ])

  const formRef = ref<FormInstance>()
  
  const form = useForm({
    firstname: '',
    lastname: '',
    email: '',
    daterange: null as [Date, Date] | null,
    program: '' as string,
    moreInfo: '',
  })

  const minDepartureDate = new Date()
  minDepartureDate.setDate(minDepartureDate.getDate() + 7)

  const rules = ref<FormRules>({
    firstname: [
      { required: true, message: 'Please input your first name', trigger: 'blur' },
      { min: 2, message: 'Length should be at least 2 characters', trigger: 'blur' },
    ],
    lastname: [
      { required: true, message: 'Please input your last name', trigger: 'blur' },
      { min: 2, message: 'Length should be at least 2 characters', trigger: 'blur' },
    ],
    email: [
      { required: true, message: 'Please input your email', trigger: 'blur' },
      { type: 'email', message: 'Please input a valid email address', trigger: 'blur' },
    ],
    daterange: [
      { required: true, message: 'Please select date range', trigger: 'change' },
      { 
        validator: (rule: any, value: [Date, Date] | null, callback: Function) => {
          if (!value || !value[0]) {
            callback(new Error('Start date is required'))
            return
          }
          if (value[0] < minDepartureDate) {
            callback(new Error('Start date must be at least a week from today'))
            return
          }
          if (!value[1]) {
            callback(new Error('End date is required'))
            return
          }
          if (value[1] <= value[0]) {
            callback(new Error('End date must be after start date'))
            return
          }
          callback()
        },
        trigger: 'change'
      }
    ],
    program: [
      { required: true, message: 'Please select a program', trigger: 'change' },
    ],
  })
  
  const onSubmit = async () => {
    if (!formRef.value) return
    
    await formRef.value.validate((valid, fields) => {
      if (valid) {
        form.post(route('contact.store'), {
          onError: (errors) => {
            console.error('Form submission failed:', errors)
          },
          onSuccess: () => {
            formRef.value?.resetFields()
          },
        })
      } else {
        console.error('Form validation failed:', fields)
      }
    })
  }

  const resetForm = () => {
    if (!formRef.value) return
    formRef.value.resetFields()
    form.reset()
  }
  </script>

<style>

.el-input__inner:focus {
  border: none;
}

</style>